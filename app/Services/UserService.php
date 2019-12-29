<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ghafoor
 * Email: azeem.ghafoorr@gmail.com
 * date: 12-29-2019
 * Time: 9:38 PM
 */


namespace App\Services;

use App\Repositories\UserRepository ;

class UserService
{
    protected $userRepository ;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository ;
    }
}
