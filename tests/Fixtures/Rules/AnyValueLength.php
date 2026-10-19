<?php

declare(strict_types=1);

namespace jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/** A length check: it accepts any value and only rejects a too long string, so it asserts nothing about the type. */
final class AnyValueLength implements ValidationRule
{
    public bool $implicit = true;

    /**
     * @param Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     * @phpstan-assert mixed $value
     * @phpstan-ignore assert.alreadyNarrowedType
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
    }
}
