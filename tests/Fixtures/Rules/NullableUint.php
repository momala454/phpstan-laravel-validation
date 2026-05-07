<?php

declare(strict_types=1);

namespace jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

final class NullableUint implements ValidationRule
{
    public bool $implicit = true;

    /**
     * @param Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     * @phpstan-assert null|int<0, 4294967295> $value
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
    }
}
