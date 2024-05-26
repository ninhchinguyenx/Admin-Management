<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Models\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    public function __construct()
    {
    }
    public function paginate()
    {
        $users = User::paginate(15);
        return $users;
    }
}
