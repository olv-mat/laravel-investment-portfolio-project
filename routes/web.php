<?php

use App\Http\Controllers\{
    UserController,
    SystemController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', [SystemController::class, 'dashboardView'])->name('dashboard');
Route::get('/favorites', [SystemController::class, 'favoritesView'])->name('favorites');
Route::get('/lists', [SystemController::class, 'listsView'])->name('lists');
Route::get('/login', [UserController::class, 'loginView'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.attempt');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'registerView'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.store');