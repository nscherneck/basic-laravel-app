<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function path()
    {
        return "/posts/" . $this->id;
    }

    public function getExcerptAttribute()
    {
        if (strlen($this->content) > 100) {
            return str_limit($this->content, 100);
        }

        return $this->content;
    }
}
