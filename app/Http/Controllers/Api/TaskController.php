<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\TaskStoreRequest;
use App\Http\Requests\Tasks\TaskUpdateRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $search = $request->search;

        $tasks = Task::when(!empty($search), function ($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })->latest()->paginate(10);

        return response()->json($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request): JsonResponse
    {
        $data = $request->validated();
        $task =  Task::create($data);

        return response()->json($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task): JsonResponse
    {
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskUpdateRequest $request, Task $task): JsonResponse
    {
        $data = $request->validated();
        $task->update($data);

        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json(['message' => 'Deletado com sucesso!']);
    }
}
