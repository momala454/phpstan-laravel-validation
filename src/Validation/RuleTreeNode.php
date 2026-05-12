<?php
/**
 * Copyright (c) anno Domini nostri Jesu Christi MMXXIV John Boehr & contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace jbboehr\PhpstanLaravelValidation\Validation;

use ArrayIterator;
use IteratorAggregate;

/**
 * @implements \IteratorAggregate<int|string, RuleTreeNode>
 */
final class RuleTreeNode implements IteratorAggregate, \Countable
{
    private bool $optional = true;
    private bool $excluded = false;
    private bool $sometimes = false;
    private bool $hasRequiredChild = false;
    private bool $nullable = false;
    private bool $isArray = false;

    /**
     * @param string $path
     * @param array<RuleTreeNode> $children
     * @param array<Rule> $rules
     */
    public function __construct(
        private string $path,
        private array $children = [],
        private array $rules = []
    ) {
    }

    /**
     * @return ArrayIterator<int|string, RuleTreeNode>
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->children);
    }

    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return Rule[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * @throws InvalidRuleException
     */
    public function insert(string $key, Rule $rule): self
    {
        $leaf = $this->resolvePath($key);
        $leaf->push($rule);
        return $this;
    }

    public function push(Rule ...$rules): self
    {
        foreach ($rules as $rule) {
            match ($rule->getRuleName()) {
                // Plain `required` is unconditional.
                Rule::RULE_REQUIRED => $this->optional = false,

                // Conditional `required_*` rules: only treat the node as
                // required when the predicate field is the node's *direct
                // parent*. That's the pattern where the conditional reduces
                // to "if parent is present, child must be present" (the
                // shape `{parent?: {child: ...}}`). When the predicate field
                // sits elsewhere in the tree we can't make a sound type-level
                // claim, so we leave the node optional.
                Rule::RULE_REQUIRED_IF,
                Rule::RULE_REQUIRED_UNLESS,
                Rule::RULE_REQUIRED_WITH,
                Rule::RULE_REQUIRED_WITH_ALL,
                Rule::RULE_REQUIRED_WITHOUT,
                Rule::RULE_REQUIRED_WITHOUT_ALL => $this->maybeRequiredFromConditional($rule),

                // This removes the node completely
                Rule::RULE_EXCLUDE => $this->excluded = true,

                // These force the node to be optional
                Rule::RULE_ACCEPTED_IF,
                Rule::RULE_DECLINED_IF,
                Rule::RULE_EXCLUDE_IF,
                Rule::RULE_EXCLUDE_UNLESS,
                Rule::RULE_EXCLUDE_WITH,
                Rule::RULE_EXCLUDE_WITHOUT,
                Rule::RULE_SOMETIMES => $this->sometimes = true,

                // `nullable` makes the value accept null. It only relaxes presence (sets
                // optional=true) if `required` hasn't already been posted on this node —
                // `['required', 'nullable']` means "key must be present, value may be null",
                // not "key may be absent".
                Rule::RULE_NULLABLE => $this->applyNullable(),

                Rule::RULE_ARRAY => $this->isArray = true,

                Rule::RULE_PHPSTANTYPE => (unserialize($rule->getParameters()[0])->isNull()->no() === true ? $this->nullable = $this->optional = false : $this->nullable = true),

                default => null,
            };
            $this->rules[] = $rule;
        }
        return $this;
    }

    /**
     * Decides whether a conditional `required_*` rule should mark this node
     * as required from a type-inference perspective.
     *
     * The conditional variants reference another attribute by name:
     *  - `required_with:other` / `required_with_all:other,other2`
     *  - `required_without:other` / `required_without_all:other,other2`
     *  - `required_if:other,value[,...]`
     *  - `required_unless:other,value[,...]`
     *
     * Their semantics depend on a sibling, the parent, or any other attribute.
     * We can only make a sound `optional = false` claim when the referenced
     * field is the **direct parent** of this node — that pattern collapses
     * to "if the parent exists, the child must exist", which is exactly
     * what the inferred shape `{parent?: {child: ...}}` already encodes.
     *
     * For every other case (siblings, ancestors further up, unrelated
     * paths) the rule remains a runtime-only enforcement and the type stays
     * optional.
     */
    private function maybeRequiredFromConditional(Rule $rule): void
    {
        $parentPath = $this->parentPath();
        if ($parentPath === null) {
            return;
        }
        foreach ($this->referencedFields($rule) as $field) {
            if ($field === $parentPath) {
                $this->optional = false;
                return;
            }
        }
    }

    private function parentPath(): ?string
    {
        $pos = strrpos($this->path, '.');
        if ($pos === false) {
            return null;
        }
        return substr($this->path, 0, $pos);
    }

    /**
     * Extracts the attribute names this `required_*` rule references.
     *
     * `required_with` / `required_with_all` / `required_without` /
     * `required_without_all` take a list of field names; `required_if` and
     * `required_unless` take `field,value[,more_values...]` so only the
     * first parameter is a field name.
     *
     * @return list<string>
     */
    private function referencedFields(Rule $rule): array
    {
        $params = $rule->getParameters();
        if (count($params) === 0) {
            return [];
        }

        $fields = match ($rule->getRuleName()) {
            Rule::RULE_REQUIRED_IF, Rule::RULE_REQUIRED_UNLESS => [$params[0]],
            Rule::RULE_REQUIRED_WITH,
            Rule::RULE_REQUIRED_WITH_ALL,
            Rule::RULE_REQUIRED_WITHOUT,
            Rule::RULE_REQUIRED_WITHOUT_ALL => $params,
            default => [],
        };

        return array_values(array_filter(
            array_map(static fn($f) => is_string($f) ? $f : null, $fields),
            static fn(?string $f): bool => $f !== null,
        ));
    }

    private function applyNullable(): void
    {
        $this->nullable = true;
        // Keep `optional=false` when a presence-implying rule has already
        // been posted. We don't re-scan `$this->rules` here because
        // conditional `required_*` variants only set `optional=false` when
        // they target the direct parent — checking the flag directly is the
        // single source of truth.
        if ($this->optional === false) {
            return;
        }
        $this->optional = true;
    }

    /**
     * @throws InvalidRuleException
     */
    public function resolvePath(string $key): RuleTreeNode
    {
        $matches = null;
        $pos = false;
        if (preg_match('/[^\\\]\./', $key, $matches, PREG_OFFSET_CAPTURE) > 0) {
            assert(isset($matches[0][1]));
            $pos = $matches[0][1] + 1;
        }

        // simple
        if (false === $pos) {
            $key = str_replace('\.', '.', $key);

            if (isset($this->children[$key])) {
                return $this->children[$key];
            }

            $path = $this->getPath() . ($this->getPath() !== '' ? '.' : '') . $key;
            return $this->children[$key] = new RuleTreeNode($path);
        }

        $subKey = str_replace('\.', '.', substr($key, 0, $pos));
        $remainder = substr($key, $pos + 1);
        $path = $this->getPath() . ($this->getPath() !== '' ? '.' : '') . $subKey;

        if (!isset($this->children[$subKey])) {
            $mapNode = $this->children[$subKey] = new RuleTreeNode($path);
        } else {
            $mapNode = $this->children[$subKey];
        }

        return $mapNode->resolvePath($remainder);
    }

    public function resolveOptional(): bool
    {
        if (count($this->children) <= 0) {
            return $this->optional || $this->sometimes;
        }

        $isRequired = false;
        foreach ($this->children as $child) {
            $childOptional = $child->resolveOptional();
            $isRequired = $isRequired || !$childOptional;
        }
        // A parent that can legitimately be absent must not be forced back to
        // required by its children — child `required` rules only apply once the
        // parent is present. The parent can be absent when:
        //  - it is `nullable`,
        //  - it has `sometimes` (or any `exclude_*`/`accepted_if`/`declined_if`
        //    rule, which all set `$sometimes`),
        //  - it has no rules of its own (an implicit parent created only because
        //    a descendant rule like `parent.child` was declared — Laravel does
        //    not validate child rules when the parent is missing, see
        //    testValidateImplicitEachWithAsterisksForRequiredNonExistingKey).
        $hasOwnRule = count($this->rules) > 0;
        $this->hasRequiredChild = $isRequired
            && !$this->nullable
            && !$this->sometimes
            && $hasOwnRule;
        return $this->isOptional();
    }

    public function hasChildren(): bool
    {
        return count($this->children) > 0;
    }

    public function hasConfirmation(): bool
    {
        foreach ($this->rules as $rule) {
            if ($rule->getRuleName() === 'Confirmed') {
                return true;
            }
        }

        return false;
    }

    public function isArray(): bool
    {
        return $this->isArray;
    }

    public function isExcluded(): bool
    {
        return $this->excluded;
    }

    public function isOptional(): bool
    {
        return ($this->optional || $this->sometimes) && !$this->hasRequiredChild;
    }

    public function isWildcard(): bool
    {
        return isset($this->children['*']);
    }

    public function isNullable(): bool
    {
        return $this->nullable;
    }

    public function count(): int
    {
        return count($this->children);
    }
}
