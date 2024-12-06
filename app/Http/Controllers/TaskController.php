<?php

namespace App\Http\Controllers;

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
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Task::create([
            'name' => $request->name,
            'status' => 'pending'
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

    public function updateStatus($id)
    {
        $task = Task::find($id);
        $task->update(['status' => 'completed']);
        return redirect()->route('tasks.index')->with('success', 'Task marked as completed');
    }
}