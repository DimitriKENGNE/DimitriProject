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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
   return view('about');
});


Route::get('/foire-aux-questions/tasks', function () {


    $name = 'Cameroun';

    $tasks = DB::table('tasks')->get();

    //return $tasks;
   return view('foire-aux-questions', compact('name', 'tasks'));
});

Route::get('/foire-aux-questions/tasks/{task}', function ($id) {




    $task = DB::table('tasks')->find($id);

    //return $tasks;
   return view('tasks.show', compact('task'));
});