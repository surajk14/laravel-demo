<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class PassportTokenHelper
{
    /**
     * Issue access token
     *
     * @param string $userName
     * @param string $password
     * @param int $clientId
     * @param string $secret
     * @return array
     */
    public static function getAccessToken($email, $password)
    {
//        $params = [
//            'form_params' => [
//                'grant_type' => 'password',
//                'client_id' => request()->header('client-id'),
//                'client_secret' => request()->header('client-secret'),
//                'username' => $email,
//                'password' => $password,
//                'scope' => '*'
//            ],
//        ];
//
//        $requestNew = $http->post('oauth/token', 'POST', $params);
//        $response = app()->handle($requestNew)->getBody();
        
        $http = new \GuzzleHttp\Client;

        $response = $http->post('http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => request()->header('client-id'),
                'client_secret' => request()->header('client-secret'),
                'username' => $email,
                'password' => $password,
                'scope' => '*',
            ],
        ]);

        return json_decode((string)$response->getBody(), true);
    }
}