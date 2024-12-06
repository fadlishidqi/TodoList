<?php

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('tasks', TaskController::class);
Route::put('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.update-status');