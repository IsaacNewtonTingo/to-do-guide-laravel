<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/todos', [TodoController::class, 'createTodo']);
Route::get('/todos', [TodoController::class, 'getTodos']);
Route::get('/todo/{id}', [TodoController::class, 'getOneTodo']);
Route::put('/todo/{id}', [TodoController::class, 'updateTodo']);
Route::delete('/todo/{id}', [TodoController::class, 'deleteTodo']);