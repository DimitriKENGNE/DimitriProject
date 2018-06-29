<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'create']);
    }

    public function index(Posts $posts)
    {


//        $posts = $posts->all();

        $posts = Post::latest()                                       // Les posts les plus recents d'abord
        ->filter(request()->only(['month', 'year']))                          // On filtre les posts selon le mois et l'année de création. Ce filtre est définit dans le fichier Posts.php
        ->get();

        return view('posts.index', compact('posts'));
    }


    public function show(Post $post )
    {

        return view('posts.show', compact('post'));
    }


    public function create()
    {
        if (!auth()->check()){
            session()->flash(
                'error', 'You must first login.'
            );
            return redirect('/login');
        }
        return view('posts.create');
    }


    public function store(Request $request)
    {
        // On valide d'abord le formulaire.
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        //Create a new post using the request data
        //$post = new Post;
        //$post->title = request('title');
        //$post->body = request('body');
        

        //Save it to the database
        //$post->save();


        $post = new Post([
            'title' => request('title'),
            'body' => request('body'),
        ]);

        auth()->user()->publish(             // Create a post and save it to the database
//          new Post(request(['title', 'body']))
            $post
        );

        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $name)
            {

                $name->move(public_path().'/images/', $name->getClientOriginalName());

                $post->addImage($name->getClientOriginalName());
            }
        }



        //  OU ENCORE
        //
        //  Post::create([
        //      'title' => request('title'),
        //      'body' => request('body'),
        //      'user_id' => auth()->id(),
        //  ]);

        session()->flash(
            'message', 'Your post has now been published'
        );

        //And then redirect to the home page

        return redirect('/');
    }

    public function edit($id)
    {
        $post = \App\Post::find($id);
        return view('posts.edit', compact('post', 'id'));
    }

    public function update(Request $request, $id)
    {
        //
        $post= \App\Post::find($id);
        $post->title=$request->get('title');
        $post->body=$request->get('body');
        $post->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        //
        $post = \App\Post::find($id);
        $post->delete();
        session()->flash(
            'message', 'Post has been  deleted'
        );
        return redirect('/');
    }



}
