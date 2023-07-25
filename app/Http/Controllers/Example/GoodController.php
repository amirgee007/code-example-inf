<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Repositories\UserRepository;

class GoodController extends BaseController
{
    /**
     * Just let the class instance as a construct parameter,
     * and the framework will handle it automatically
     */
    public function __construct(private readonly UserRepository $user)
    {
    }

    public function index(): string
    {
        return 'This is good!';
    }

    public function getUsers(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->user->getAllUsers();
    }

    public function getUser(): \Illuminate\Database\Eloquent\Model|User|null
    {
        return $this->user->getUserById(request('id'));
    }
}
