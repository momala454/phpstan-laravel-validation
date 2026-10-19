<?php

declare(strict_types=1);

namespace jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/** Rejects every empty value, null included, without constraining the type otherwise. */
final class FilledValue implements ValidationRule
{
    public bool $implicit = true;

    /**
     * @param Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     * @phpstan-assert non-empty-mixed $value
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
    }
}
