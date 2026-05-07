<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

// A `nullable` parent with a `required` child must remain optional:
// the child's `required` rule is conditional on the parent being present and non-null,
// so it must not force the parent to be required.

$validator = \Illuminate\Support\Facades\Validator::make([], [
    'parent' => 'array|nullable',
    'parent.thing' => 'required|string',
]);
assertType('Illuminate\\Validation\\Validator', $validator);

$validated = $validator->validated();
assertType('array{parent?: array{thing: string}|null}', $validated);

// Same pattern with a wildcard child:
$validator2 = \Illuminate\Support\Facades\Validator::make([], [
    'something' => 'array|nullable',
    'something.*' => 'required|string',
]);

$validated2 = $validator2->validated();
assertType('array{something?: array<int|string, string>|null}', $validated2);

// Two siblings sharing the same shape must both be optional:
$validator3 = \Illuminate\Support\Facades\Validator::make([], [
    'something' => 'array|nullable',
    'something.*' => 'required|string',
    'else' => 'array|nullable',
    'else.*' => 'required|string',
]);

$validated3 = $validator3->validated();
assertType('array{something?: array<int|string, string>|null, else?: array<int|string, string>|null}', $validated3);

// `required` + `nullable` on the same node: key must be present, value may be null.
$validator4 = \Illuminate\Support\Facades\Validator::make([], [
    'parent' => 'required|array|nullable',
    'parent.thing' => 'required|string',
]);

$validated4 = $validator4->validated();
assertType('array{parent: array{thing: string}|null}', $validated4);
