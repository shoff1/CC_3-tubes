<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TaskController;

// Rute untuk halaman home
Route::get('home', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman profile
Route::get('profile', ProfileController::class)->name('profile');

// Rute untuk resource employees
Route::resource('employees', EmployeeController::class);

// Rute untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});


// Route::resource('barangs', BarangController::class);
// Route::resource('satuans', SatuanController::class);



Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::patch('/tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');


