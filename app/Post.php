<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    //protected $guarded = [];

    // ou encore protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
