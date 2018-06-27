<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class SessionsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        // Create a new session

        Session::setPreviousUrl(URL::current());

        return view('sessions.create');
    }

    public function store()
    {
        // Attempt to authenticate the user. If not, redirect back and If so, sign them in


        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }

        // Redirect to the home page

        return redirect(Session::previousUrl());
    }


    public function destroy()
    {
        //
        auth()->logout();
        return redirect()->home();
    }
}
