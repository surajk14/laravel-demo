<?php
namespace App\Services;

use App\Repositories\UserProfileRepository;
use App\Repositories\UserRepository;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    /**
     * Repository Object
     * 
     * @var $userRepository
     */
    private $userRepository;

    /**
     * Repository Object
     * 
     * @var $userProfileRepository
     */
    private $userProfileRepository;

    /**
     * To initialize object and variables
     * 
     * @param $userRepository
     */
    public function __construct(UserRepository $userRepository,
        UserProfileRepository $userProfileRepository)
    {
        $this->userRepository = $userRepository;
        $this->userProfileRepository = $userProfileRepository;
    }

    /**
     * To create user and profile data
     * 
     * @param array $inputData
     * @return collection
     */
    public function create(array $inputData)
    {
        return $this->userRepository->create($inputData);
    }

    /**
     * To create user and profile data
     * 
     * @param array $inputData
     * @return collection
     */
    public function createUserProfile(array $inputData)
    {
        return $this->userProfileRepository->create($inputData);
    }
}
