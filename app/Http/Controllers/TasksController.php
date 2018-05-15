<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{

    public function index()
    {
        $name = 'Cameroun';

        $tasks = Task::all();

        //return $tasks;
        return view('tasks.index', compact('name', 'tasks'));
    }

    public  function show($id)
    {
        $task = Task::find($id);

        //return $tasks;
        return view('tasks.show', compact('task'));
    }

}
