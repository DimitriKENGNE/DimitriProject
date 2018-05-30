<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()                                       // Les posts les plus recents d'abord
        ->filter(request()->only(['month', 'year']))                          // On filtre les posts selon le mois et l'ann�e de cr�ation. Ce filtre est d�finit dans le fichier Post.php
        ->get();


        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published' )   // On selectionne les ann�es, les mois de cr�ation et le nbre des posts
            ->groupBy('year', 'month')                                                                           // On les classe par ann�e et par mois
            ->orderByRaw('min(created_at) desc')
            ->get()                                                                                              // On les prends
            ->toArray();

        return view('posts.index', compact('posts', 'archives'));
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
