<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        Task::create($request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]));

        return redirect('/tasks');
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]));

        return redirect('/tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
