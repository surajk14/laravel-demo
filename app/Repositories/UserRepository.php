<?php

namespace App\Repositories;

use App\User;

class UserRepository extends Repository
{
    /**
     * To initialize object and variable
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}

