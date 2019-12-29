<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ghafoor
 * Email: azeem.ghafoorr@gmail.com
 * date: 12-29-2019
 * Time: 9:38 PM
 */

namespace App\Repositories;


use App\User;

class UserRepository
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
