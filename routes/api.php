<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [App\Http\Controllers\AuthController::class, 'logout']);


Route::middleware('auth:sanctum')->apiResource('projects', App\Http\Controllers\ProjectController::class);

Route::middleware('auth:sanctum')->apiResource('tasks', App\Http\Controllers\TaskController::class);
