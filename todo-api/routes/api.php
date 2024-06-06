<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Example route for getting all todos
Route::get('/todos', [TodoController::class, 'index']);

// Example route for creating a new todo
Route::post('/todos', [TodoController::class, 'store']);

// Example route for updating a todo
Route::put('/todos/{id}', [TodoController::class, 'update']);

// Example route for deleting a todo
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);
