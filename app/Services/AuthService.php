<?php

namespace App\Services;

use App\Helpers\PassportTokenHelper;

/**
 * Class UserService
 * @package App\Services
 */
class AuthService
{
    /**
     * Get access token
     * 
     * @param array $inputData
     */
    public function getToken(array $inputData)
    {
        return PassportTokenHelper::getAccessToken($inputData['email'], $inputData['password']);
    }
}