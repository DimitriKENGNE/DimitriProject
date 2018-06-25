<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Post $post)    //Add a comment to the current post
    {
        if (!auth()->check()){
            session()->flash(
                'error', 'You must first login.'
            );
            return redirect('/login');
        }
        $this->validate(request(), ['body'=>'required|min:2']);
        $post->addComment(request('body'));

        return back();

    }

    public function edit($id)
    {
        $comment = \App\Comment::find($id);
        return view('comments.edit', compact('comment', 'id'));
    }

    public function update(Request $request, $id)
    {
        //
        $comment= \App\Comment::find($id);
        $comment->body=$request->get('body');
        $comment->save();
        $f= $comment->post;

        return redirect("/posts/$f->id");
    }

    public function destroy($id)
    {
        //
        $comment = \App\Comment::find($id);
        $comment->delete();
        session()->flash(
            'message', 'Comment has been  deleted.'
        );
        return back();
    }
}
