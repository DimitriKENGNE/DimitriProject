<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/about', function () {
   return view('about');
});


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');




Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');


Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::post('/posts/update/{post}', 'PostsController@update');



Route::get('/posts/{post}/delete', 'PostsController@destroy');
Route::get('/image/{image}/delete', 'ImageController@destroy');



Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/comments/{comment}/edit', 'CommentsController@edit');

Route::post('/comments/update/{comment}', 'CommentsController@update');

Route::get('/comments/{comment}/delete', 'CommentsController@destroy');




Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/account/{user}', 'RegistrationController@show');

Route::get('/register/{user}/edit', 'RegistrationController@edit');
Route::post('/register/update/{user}', 'RegistrationController@update');




Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');



