<?php

use App\Http\Controllers\{
    UserController,
    SystemController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', [SystemController::class, 'dashboard'])->name('dashboard');
Route::get('/favorites', [SystemController::class, 'favorites'])->name('favorites');
Route::get('/lists', [SystemController::class, 'lists'])->name('lists');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'create'])->name('create');