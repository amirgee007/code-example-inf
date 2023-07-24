<?php

namespace App\Examples;

use App\Services\ExampleService;

class VariableType
{
    public function good(): string
    {
        /** @var ExampleService $service */
        $service = app()->make(ExampleService::class);
        return $service->test(); // Can jump to source
    }

    public function bad(): string
    {
        $user = app()->make(ExampleService::class);
        return $user->test(); // Can't jump to source
    }
}
