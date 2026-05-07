<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

// A parent with `exclude_if` is conditionally absent. Its `required` children
// must not force the parent itself to be required — Laravel only validates
// child rules once the parent is present.
//
// Reference: Laravel's testExcludeIf "nested-03" case in
// tests/Validation/ValidationValidatorTest.php (`appointments` excluded when
// `has_appointments` is false, even though its rules include `required`).

$validator = \Illuminate\Support\Facades\Validator::make([], [
    'has_appointments' => 'required|bool',
    'appointments' => 'exclude_if:has_appointments,false|required|array',
    'appointments.*.date' => 'required|date',
    'appointments.*.name' => 'required|string',
]);
assertType('Illuminate\\Validation\\Validator', $validator);

$validated = $validator->validated();
assertType(
    "array{has_appointments: 0|1|'0'|'1'|bool, appointments?: array<int|string, array{date: DateTimeInterface|non-empty-string, name: string}>}",
    $validated,
);

// `exclude_unless` has the same effect as `exclude_if` here.
$validator2 = \Illuminate\Support\Facades\Validator::make([], [
    'flag' => 'required|bool',
    'payload' => 'exclude_unless:flag,true|required|array',
    'payload.*' => 'required|string',
]);

$validated2 = $validator2->validated();
assertType(
    "array{flag: 0|1|'0'|'1'|bool, payload?: array<int|string, string>}",
    $validated2,
);

// Bare `sometimes` on the parent has the same semantics: child `required`
// rules don't force the parent to exist.
$validator3 = \Illuminate\Support\Facades\Validator::make([], [
    'config' => 'sometimes|array',
    'config.timeout' => 'required|integer',
]);

$validated3 = $validator3->validated();
assertType('array{config?: array{timeout: int|numeric-string}}', $validated3);
