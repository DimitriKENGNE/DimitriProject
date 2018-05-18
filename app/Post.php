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

    public function addComment($body)
    {
        //Add a comment to a post

        $this->comments()->create(compact('body'));


        //  Ou encore
        //
        //
    //    Comment::create([
    //        'body' => $body,
    //        'post_id' => $this->id,   //$this refer to the post.
    //    ]);
    }
}
