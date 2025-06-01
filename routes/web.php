<?php

use App\Http\Controllers\{
    UserController,
    DashboardController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'create'])->name('create');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');