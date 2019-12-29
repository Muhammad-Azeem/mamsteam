<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ghafoor
 * Email: azeem.ghafoorr@gmail.com
 * date: 12-29-2019
 * Time: 9:38 PM
 */


namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository ;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository ;
    }
}
