<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'description' => 'required'
        ]);

        $task = new Task;

        $task->description = request('description');
        $task->save();

        

        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }


    public function delete($id)
    {
        $task = Task::find($id);
        $task -> delete();
        return redirect('/task');
    }
}
