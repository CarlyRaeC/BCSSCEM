<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {


        return view('tasks.task', compact('task'));

    }

    public function create()
    {

        $users = User::all();

        return view('tasks.create', compact('users'));
    }

    public function store()
    {
        // validate

        $this->validate(request(), [
            'body' => 'required',
            'user_id' => 'required'
        ]);

        // create new task
        // save to db


        Task::create([
            'body' => request('body'),
            'user_id' => request('user_id')
        ]);

        // redirect

        return back();

    }
}
