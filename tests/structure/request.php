<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

$request = new \Illuminate\Http\Request();
$validator = $request->validate([
    'person.*.email' => 'required|email|unique:users',
    'person.*.first_name' => 'required|string',
]);
assertType('Illuminate\\Validation\\Validator', $validator);

$validated = $validator->validated();
assertType('array{person: array<int|string, array{email: non-empty-string, first_name: string}>}', $validated);
assertType('non-empty-string', $validated['person'][0]['email']);
assertType('string', $validated['person'][0]['first_name']);
