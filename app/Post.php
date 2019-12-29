<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['post_id', 'content', 'user_id', 'group_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function likes()
    {
        return $this->hasMany('App\PostLike');
    }
}
