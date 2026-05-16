<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UpdateController;

// Home
Route::get('/', [HomeController::class, "index"])->name('home');

// Todo
Route::prefix('/todo')->group(function () {
    Route::get('/', [TodoController::class, "index"])->name('todo');
    Route::post('/store', [TodoController::class, "store"])->name('todo.store');

    Route::get('/{task_id}/delete', [TodoController::class, "delete"])->name('todo.delete');
    Route::get('/{task_id}/done', [TodoController::class, "done"])->name('todo.done');

    Route::get('/{task_id}/updates', [UpdateController::class, "updates"])->name('updates');

    Route::post('/{task_id}/update', [UpdateController::class, "update"])->name('todo.update');
});
