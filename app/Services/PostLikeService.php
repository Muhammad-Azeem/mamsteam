<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ghafoor
 * Email: azeem.ghafoorr@gmail.com
 * date: 12-29-2019
 * Time: 9:38 PM
 */


namespace App\Services;

use App\Repositories\PostLikeRepository;

class PostLikeService
{
    protected $postLikeRepository ;

    public function __construct(PostLikeRepository $postLikeRepository)
    {
        $this->postLikeRepository = $postLikeRepository ;
    }
}
