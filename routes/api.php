<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Endpoint untuk Read (Menampilkan Task)
Route::get('/tasks', [TaskController::class, 'index']);

// Endpoint untuk Delete (Menghapus Task)
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
