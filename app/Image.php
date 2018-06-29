<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    protected $fillable = [
        'name', 'user_id', 'post_id',
    ];

    // An image belongs to a post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // An image also belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
