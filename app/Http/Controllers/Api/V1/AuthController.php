<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

/**
 * Class AuthController
 * @package App\Http\Controllers\Api\V1
 */
class AuthController extends Controller
{
    /**
     * @var AuthService
     */
    private $authService;

    /**
     * AuthController constructor.
     * @param AuthService $service
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * User login
     * 
     * @param LoginRequest
     */
    public function userLogin(LoginRequest $loginRequest)
    {
        $inputData = $loginRequest->all();

        return $this->authService->getToken($inputData);
    }
}
