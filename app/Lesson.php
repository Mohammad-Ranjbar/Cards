<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{


    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }



}
