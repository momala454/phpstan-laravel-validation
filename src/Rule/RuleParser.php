<?php

declare(strict_types=1);

namespace jbboehr\PhpstanLaravelValidation\Rule;

final class RuleParser
{
    /**
     * @param mixed $rules
     * @return RuleTreeMapNode
     * @throws InvalidRuleException
     */
    public static function parse(mixed $rules): RuleTreeMapNode
    {
        $node = new RuleTreeMapNode('');

        if (!is_array($rules)) {
            return $node;
        }

        foreach ($rules as $path => $ruleDef) {
            if (!is_string($path)) {
                throw new InvalidRuleException("Invalid rule path: " . var_export($path, true));
            }

            $child = $node->resolvePath($path);
            $child->push(...self::explodeRules($ruleDef));
        }
        return $node;
    }

    /**
     * @param mixed $rules
     * @return Rule[]
     * @throws InvalidRuleException
     */
    public static function explodeRules(mixed $rules): array
    {
        if (is_string($rules)) {
            $rules = explode('|', $rules);
        }

        if (!is_array($rules)) {
            throw new InvalidRuleException('Invalid rule definition: ' . var_export($rules, true));
        }

        return array_map(function ($rule) {
            return self::parseRule($rule);
        }, $rules);
    }

    /**
     * @throws InvalidRuleException
     */
    public static function parseRule(mixed $rule): Rule
    {
        if (is_array($rule)) {
            return self::parseArrayRule($rule);
        } elseif (is_string($rule)) {
            return self::parseStringRule($rule);
        }

        throw new InvalidRuleException('Invalid rule type: ' . gettype($rule) . ' ' . var_export($rule, true));
    }

    /**
     * @param array<int, mixed> $rule
     * @return Rule
     */
    public static function parseArrayRule(array $rule): Rule
    {
        if (count($rule) <= 0) {
            throw new InvalidRuleException('No rules in rule');
        }

        $ruleName = $rule[0];

        if (!is_string($ruleName)) {
            throw new InvalidRuleException('Rule name not a string');
        }

        return Rule::create(self::normalizeName($ruleName), array_slice($rule, 1));
    }

    public static function parseStringRule(string $rule): Rule
    {
        if (str_contains($rule, ':')) {
            [$rule, $parameter] = explode(':', $rule, 2);

            $parameters = match (strtolower($rule)) {
                "regex", "not_regex", "notregex" => [$parameter],
                default => str_getcsv($parameter),
            };
        } else {
            $parameters = [];
        }

        return Rule::create(self::normalizeName($rule), $parameters);
    }

    public static function normalizeName(string $str): string
    {
        return implode(array_map(function (string $word) {
            return ucfirst($word);
        }, explode(' ', str_replace(['-', '_'], ' ', $str))));
    }
}
