<?php

declare(strict_types=1);

namespace jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

final class NullableNonEmptyArrayValue implements ValidationRule
{
    public bool $implicit = true;

    /**
     * @param Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     * @phpstan-assert null|non-empty-array<mixed> $value
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
    }
}
