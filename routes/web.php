<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Halaman utama (Daftar Tugas - Bagian temanmu)
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Fitur Create (Bagianmu)
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
