<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

class RegistrationController extends Controller
{
    //

    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {



        // Create and save the user

        $form->persist();

        session()->flash('message', 'Thanks so much for signing up!');


        // Redirect to the home page
        return redirect()->home();
    }

    public function edit($id)
    {
        $user = \App\User::find($id);
        return view('registration.edit', compact('user', 'id'));
    }

    public function update(Request $request, $id)
    {
        //
        $user= \App\User::find($id);
        $user->name= $request->get('name');
        $user->email= $request->get('email');
        $user->password= Hash::make(request('password'));
        $user->save();
        return redirect('/');
    }


}
