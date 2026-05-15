<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

//Home 
Route::get('/',[HomeController::class,"index"])->name('home');

//Todo
Route::get('/todo',[TodoController::class,"index"])->name('todo');