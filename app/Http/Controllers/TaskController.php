<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());
        return response()->json($task, 201);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
