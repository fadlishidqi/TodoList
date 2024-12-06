<?php

namespace App\Decorators;

interface TaskInterface
{
    public function create(array $data);
    public function getAll();
    public function updateStatus($id, $status);
    public function delete($id);
}
