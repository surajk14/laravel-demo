<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Services\UserService;

class UserController extends Controller
{
    /**
     * Service object
     * 
     * @var UserService
     */
    private $userService;

    /**
     * To initialize objects/variables
     * 
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * User Registration
     * 
     * @param request $userRegisterRequest
     * @return json 
     */
    public function register(UserRegisterRequest $userRegisterRequest)
    {
        $inputData = $userRegisterRequest->all();
        $user = $this->userService->create($inputData);

        return json_decode((string)$user, true);
    }
}
