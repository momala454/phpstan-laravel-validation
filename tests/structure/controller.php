<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

// Laravel 11+ removed ValidatesRequests from the default
// `App\Http\Controllers\Controller` class. Use a local class that explicitly
// pulls the trait so the test exercises the extension regardless of Laravel
// version.
class TestController extends \Illuminate\Routing\Controller
{
    use \Illuminate\Foundation\Validation\ValidatesRequests;
}

$controller = new TestController();
$validated = $controller->validate(new \Illuminate\Http\Request(), [
    'amount' => 'required|integer',
]);
assertType("int|numeric-string", $validated['amount']);

$controller = new TestController();
$validator = \Illuminate\Support\Facades\Validator::make([], [
    'amount' => 'required|integer',
]);
$validated = $controller->validateWith($validator, new \Illuminate\Http\Request());
assertType("int|numeric-string", $validated['amount']);
