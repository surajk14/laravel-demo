<?php

namespace App\Observers;

use App\Services\UserService;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\User;

class UserObserver
{
    /**
     * Service object
     *
     * @var UserService
     */
    private $userService;

    /**
     * Repository object
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * To initialize objects/variables
     *
     * @param Request $request
     * @param UserService $userService
     * @param UserRepository $userRepository
     */
    public function __construct(Request $request,
        UserService $userService,
        UserRepository $userRepository)
    {
        $this->request = $request;
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        $inputData = $this->request->all();
        $inputData['user_id'] = $user->id;
        $this->userService->createUserProfile($inputData);
    }
}

