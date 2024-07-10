<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [UserController::class, 'logout']);
    Route::get('me', [UserController::class, 'me']);
});

Route::middleware('jwt.auth')->group(function () {
    Route::get('task', [TaskController::class, 'index']);
    Route::get('task/{task}', [TaskController::class, 'show']);
    Route::post('task', [TaskController::class, 'store']);
    Route::put('task/{task}', [TaskController::class, 'update']); // Ensure PUT method is defined
    Route::delete('task/{task}', [TaskController::class, 'destroy']);
});
