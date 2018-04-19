<?php
namespace App\Repositories;

use App\User;
use App\Models\UsersProfile;

class UserProfileRepository extends Repository
{
    /**
     * Model Object
     * 
     * @var User $model
     */
    private $userModel;

    /**
     * To initialize object and variable
     */
    public function __construct(User $userModel, UsersProfile $model)
    {
        $this->model = $model;
        $this->userModel = $userModel;
    }
}
