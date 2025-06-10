<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Resourceful routes (includes all CRUD routes)
Route::resource('students', StudentController::class);

// OR your specific routes (alternative)
Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
