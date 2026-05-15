<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

//Home
Route::get('/',[HomeController::class,"index"])->name('home');

//Todo


Route::prefix('/todo')->group(function (){
    Route::get('/',[TodoController::class,"index"])->name('todo');
    Route::post('/store',[TodoController::class,"store"])->name('todo.store');
});
