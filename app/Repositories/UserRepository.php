<?php

namespace App\Repositories;

use App\Models\User;
use App\Services\ExampleService;
use Illuminate\Database\Eloquent\Model;

class UserRepository
{
    public function __construct(private readonly ExampleService $service)
    {
    }

    public function getAllUsers(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }

    public function getUserById(int $id): User|Model|null
    {
        $this->service->handle();
        return User::query()->find($id);
    }
}
