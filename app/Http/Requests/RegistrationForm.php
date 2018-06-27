<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //// Validate the form
            'name' => 'required',
            'email' => 'required|email',
            'filename' => 'required',
            'password' => 'required|confirmed'
        ];
    }

    public function persist()
    {
        $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'filename' => request('filename'),
            ]);


        // Sign them in
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));
    }
}
