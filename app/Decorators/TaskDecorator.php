<?php

namespace App\Decorators;

class TaskDecorator implements TaskInterface
{
    protected $task;

    public function __construct(TaskInterface $task)
    {
        $this->task = $task;
    }

    public function create(array $data)
    {
        return $this->task->create($data);
    }

    public function getAll()
    {
        return $this->task->getAll();
    }

    public function updateStatus($id, $status)
    {
        return $this->task->updateStatus($id, $status);
    }

    public function delete($id)
    {
        return $this->task->delete($id);
    }
}