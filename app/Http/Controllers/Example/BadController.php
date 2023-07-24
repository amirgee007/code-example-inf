<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\ExampleService;

class BadController extends BaseController
{
    public function index(): string
    {
        return 'This is bad!';
    }

    public function getUsers(): \Illuminate\Database\Eloquent\Collection
    {
        /**
         * We need to do this in everywhere we use UserRepository
         */
        $service = new ExampleService();
        $user = new UserRepository($service);
        return $user->getAllUsers();
    }

    public function getUser(): \Illuminate\Database\Eloquent\Model|User|null
    {
        /**
         * We need to do this in everywhere we use UserRepository
         */
        $service = new ExampleService();
        $user = new UserRepository($service);
        return $user->getUserById(request('id'));
    }
}
