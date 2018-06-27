@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
        <h1>Edit my Account</h1>

        <form method="post" action="/register/update/{{$id}}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" autofocus required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="email">Photo:</label>
                <input type="file" class="form-control" id="image" name="filename" >
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"  required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Save changes</button>
            </div>

            @include('layouts.errors')


        </form>
    </div>
@endsection