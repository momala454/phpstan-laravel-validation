<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

// `required_with:parent` on a *direct child of `parent`* reduces to
// "if parent exists, child must exist", so it's sound to mark the child
// as required inside the parent's shape.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'parent'            => 'array|nullable',
    'parent.start_date' => 'required_with:parent|string|date',
    'parent.end_date'   => 'required_with:parent|string|date',
])->validated();
assertType(
    'array{parent?: array{start_date: non-empty-string, end_date: non-empty-string}|null}',
    $validated,
);

// `required_unless:parent,null` has the same effect for a direct child.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'parent'            => 'array|nullable',
    'parent.start_date' => 'required_unless:parent,null|string|date',
])->validated();
assertType(
    'array{parent?: array{start_date: non-empty-string}|null}',
    $validated,
);

// `required_with:sibling` referencing a *sibling* (not the parent) must
// stay optional — the type can't encode the cross-field condition soundly.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'a' => 'required_with:b|string',
    'b' => 'string',
])->validated();
assertType('array{a?: string, b?: string}', $validated);

// `required_if:other,value` with `other` being a sibling also stays optional.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'flag'  => 'required|string',
    'value' => 'required_if:flag,enabled|string',
])->validated();
assertType('array{flag: string, value?: string}', $validated);

// Plain `required` is unconditional — still marks the field as required.
$validated = \Illuminate\Support\Facades\Validator::make([], [
    'name' => 'required|string',
])->validated();
assertType('array{name: string}', $validated);
