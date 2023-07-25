<?php

namespace App\Examples;

use App\Services\ExampleService;

class VariableType
{
    public function index(): void
    {
        $service = app()->make(ExampleService::class);
        $service->handle(); // Can't jump to source

        /** @var ExampleService $serviceWithPhpDoc */
        $serviceWithPhpDoc = app()->make(ExampleService::class);
        $serviceWithPhpDoc->handle(); // Can jump to source
    }
}
