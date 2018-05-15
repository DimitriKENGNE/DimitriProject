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

    public  function show(Task $task)
    {
        //$task = Task::find($id);

        //return $task;

        return view('tasks.show', compact('task'));
    }

}
