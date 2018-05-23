<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }


    public function show(Post $post )
    {

        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {
        // On valide d'abord le formulaire.
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        //Create a new post using the request data
        //$post = new Post;
        //$post->title = request('title');
        //$post->body = request('body');


        //Save it to the database
        //$post->save();

        auth()->user()->publish(             // Create a post and save it to the database
          new Post(request(['title', 'body']))
        );

        //  OU ENCORE
        //
        //  Post::create([
        //      'title' => request('title'),
        //      'body' => request('body'),
        //      'user_id' => auth()->id(),
        //  ]);

        //And then redirect to the home page

        return redirect('/');
    }





}
