<?php

declare(strict_types=1);

use jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules\NullableArrayValue;
use jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules\NullableUint;
use jbboehr\PhpstanLaravelValidation\Test\Fixtures\Rules\RequiredString;

use function PHPStan\Testing\assertType;

// Custom validation rule classes that expose their refined value type via
// `@phpstan-assert` on `validate()`. The extension picks the assert up via
// `Evaluator/UnsafeConstExprEvaluator::getValueFromType()` and turns it into
// a `PHPStanType` rule.

// 1. Required class rule: key must be present, value is the asserted type.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'name' => [new RequiredString()],
])->validated();
assertType('array{name: string}', $validated);

// 2. Nullable class rule: key is optional, value is null or the asserted type.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'count' => [new NullableUint()],
])->validated();
assertType('array{count?: int<0, 4294967295>|null}', $validated);

// 3. Nullable array parent + uint wildcard child: parent optional, items keep
//    their refined type. (Exercises the implicit-parent + nullable-parent
//    fixes alongside the class-rule resolution.)
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'ids'   => [new NullableArrayValue()],
    'ids.*' => [new NullableUint()],
])->validated();
assertType('array{ids?: array<int|string, int<0, 4294967295>|null>|null}', $validated);

// 4. Nested optional parent with class rules on dotted children — Laravel
//    only validates the children when the parent is present, so the parent
//    must stay optional even though every child is required.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'range'            => [new NullableArrayValue()],
    'range.start_date' => [new RequiredString(), 'date'],
    'range.end_date'   => [new RequiredString(), 'date'],
])->validated();
assertType(
    'array{range?: array{start_date: non-empty-string, end_date: non-empty-string}|null}',
    $validated,
);
