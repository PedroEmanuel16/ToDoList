<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->take(4);

        return view('Task.index')->with('tasks', $tasks);
    }

    public function create()
    {
        $categories = Category::all();

        return view('Task.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $task = $request->except('_token');
        $task['user_id'] = 1;

        Task::create($task);

        return redirect()->route('task.index');
    }

    public function edit(Task $task)
    {
        $categories = Category::all();
        // $task->date = '1111';

        return view('Task.edit')->with(['task' => $task, 'categories' => $categories]);
    }

    public function update(Task $task, Request $request)
    {
        $data = $request->except('_token', '_method');

        $data['checked'] = $request->has('checked') ? 1 : 0;

        $task->update($data);
        $task->checked = $data['checked'];
        $task->save();

        return redirect()->route('task.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task.index');
    }
}
