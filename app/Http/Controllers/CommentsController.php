<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Post $post)    //Add a comment to the current post
    {
        $this->validate(request(), ['body'=>'required|min:2']);
        $post->addComment(request('body'));


        return back();
    }



    public function destroy($id)
    {
        //
        $comment = \App\Comment::find($id);
        $comment->delete();
        return back()->with('success', 'Post has been  deleted');
    }
}
