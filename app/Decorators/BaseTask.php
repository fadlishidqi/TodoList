<?php

namespace App\Decorators;

use App\Models\Task;

class BaseTask implements TaskInterface
{
    public function create(array $data)
    {
        return Task::create($data);
    }

    public function getAll()
    {
        return Task::all();
    }

    public function updateStatus($id, $status)
    {
        $task = Task::find($id);
        $task->status = $status;
        $task->save();
        return $task;
    }

    public function delete($id)
    {
        return Task::destroy($id);
    }
}