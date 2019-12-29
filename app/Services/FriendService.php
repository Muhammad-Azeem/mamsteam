<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ghafoor
 * Email: azeem.ghafoorr@gmail.com
 * date: 12-29-2019
 * Time: 9:38 PM
 */


namespace App\Services;

use App\Repositories\FriendRepository;

class FriendService
{
    protected $friendRepository ;

    public function __construct(FriendRepository $friendRepository)
    {
        $this->friendRepository = $friendRepository ;
    }
}
