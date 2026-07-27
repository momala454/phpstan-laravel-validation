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

final class Rule
{
    public const RULE_ACCEPTED_IF = "AcceptedIf";
    public const RULE_DECLINED_IF = "DeclinedIf";
    public const RULE_REQUIRED = "Required";
    public const RULE_REQUIRED_IF = "RequiredIf";
    public const RULE_REQUIRED_UNLESS = "RequiredUnless";
    public const RULE_REQUIRED_WITH = "RequiredWith";
    public const RULE_REQUIRED_WITH_ALL = "RequiredWithAll";
    public const RULE_REQUIRED_WITHOUT = "RequiredWithout";
    public const RULE_REQUIRED_WITHOUT_ALL = "RequiredWithoutAll";
    public const RULE_EXCLUDE = "Exclude";
    public const RULE_EXCLUDE_IF = "ExcludeIf";
    public const RULE_EXCLUDE_UNLESS = "ExcludeUnless";
    public const RULE_EXCLUDE_WITH = "ExcludeWith";
    public const RULE_EXCLUDE_WITHOUT = "ExcludeWithout";
    public const RULE_NULLABLE = "Nullable";
    public const RULE_SOMETIMES = "Sometimes";
    public const RULE_ARRAY = "Array";
    public const RULE_NUMERIC = "Numeric";
    public const RULE_PHPSTANTYPE = "PHPStanType";

    public const RULES = [
        self::RULE_ACCEPTED_IF => self::RULE_ACCEPTED_IF,
        self::RULE_DECLINED_IF => self::RULE_DECLINED_IF,
        self::RULE_REQUIRED => self::RULE_REQUIRED,
        self::RULE_REQUIRED_IF => self::RULE_REQUIRED_IF,
        self::RULE_REQUIRED_UNLESS => self::RULE_REQUIRED_UNLESS,
        self::RULE_REQUIRED_WITH => self::RULE_REQUIRED_WITH,
        self::RULE_REQUIRED_WITH_ALL => self::RULE_REQUIRED_WITH_ALL,
        self::RULE_REQUIRED_WITHOUT => self::RULE_REQUIRED_WITHOUT,
        self::RULE_REQUIRED_WITHOUT_ALL => self::RULE_REQUIRED_WITHOUT_ALL,
        self::RULE_EXCLUDE => self::RULE_EXCLUDE,
        self::RULE_EXCLUDE_IF => self::RULE_EXCLUDE_IF,
        self::RULE_EXCLUDE_UNLESS => self::RULE_EXCLUDE_UNLESS,
        self::RULE_EXCLUDE_WITH => self::RULE_EXCLUDE_WITH,
        self::RULE_EXCLUDE_WITHOUT => self::RULE_EXCLUDE_WITHOUT,
        self::RULE_NULLABLE => self::RULE_NULLABLE,
        self::RULE_SOMETIMES => self::RULE_SOMETIMES,
        self::RULE_ARRAY => self::RULE_ARRAY,
        self::RULE_NUMERIC => self::RULE_NUMERIC,
    ];

    /**
     * @param string $ruleName
     * @param array<int, mixed> $parameters
     * @return static
     */
    public static function create(
        string $ruleName,
        array $parameters = []
    ): self {
        return new self($ruleName, $parameters);
    }

    /**
     * @param string $ruleName
     * @param array<int, mixed> $parameters
     */
    public function __construct(
        private string $ruleName,
        private array $parameters = []
    ) {
    }

    public function getRuleName(): string
    {
        return $this->ruleName;
    }

    /**
     * @return array<int, mixed>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * Builds the synthetic `PHPStanType:<payload>` rule string carrying an asserted type.
     *
     * The payload is base64 encoded rather than embedded raw: the rule travels as a plain
     * string until `RuleParser::parseStringRule()` splits it back apart, and that parsing
     * treats `|` and `,` as separators. A `serialize()` output can contain both, because
     * PHPStan caches the rendered type description inside the type object itself (e.g.
     * `int<0, 4294967295>|null`), which would truncate the payload and make it impossible
     * to unserialize. The base64 alphabet contains none of those separators.
     */
    public static function encodePHPStanType(\PHPStan\Type\Type $type): string
    {
        return self::RULE_PHPSTANTYPE . ':' . base64_encode(serialize($type));
    }

    /**
     * Decodes the type carried by a `PHPStanType` rule, or null when the parameter is not
     * a payload produced by self::encodePHPStanType().
     */
    public function getPHPStanType(): ?\PHPStan\Type\Type
    {
        $parameter = $this->parameters[0] ?? null;
        if (!is_string($parameter)) {
            return null;
        }

        $serialized = base64_decode($parameter, true);
        if ($serialized === false) {
            return null;
        }

        $type = @unserialize($serialized);

        return $type instanceof \PHPStan\Type\Type ? $type : null;
    }
}
