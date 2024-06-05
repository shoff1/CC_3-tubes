<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
            'attachment' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('attachment')) {
            $data['attachment'] = $request->file('attachment')->store('attachments');
        }

        Task::create($data);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
            'attachment' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('attachment')) {
            if ($task->attachment) {
                Storage::delete($task->attachment);
            }
            $data['attachment'] = $request->file('attachment')->store('attachments');
        }

        $task->update($data);

        return redirect()->route('tasks.index');
    }


    public function destroy(Task $task)
    {
        if ($task->attachment) {
            Storage::delete($task->attachment);
        }
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function toggle(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
        return redirect()->route('tasks.index');
    }
}
