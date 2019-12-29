<?php
/**
 * Created by PhpStorm.
 * User: Azeem Ghafoor
 * Email: azeem.ghafoorr@gmail.com
 * date: 12-29-2019
 * Time: 9:38 PM
 */

namespace App\Repositories;


use App\Image;

class ImageRepository
{
    public $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }
}
