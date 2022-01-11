<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/currentUserPost', [PostController::class, 'currentUserPost'])->name('currentUserPost');
Route::post('/posts', [PostController::class, 'store']);

Route::get('/postShow/{id}', [PostController::class, 'postShow']);
Route::get('/postEdit/{id}', [PostController::class, 'postEdit']);
Route::post('/postUpdate/{id}', [PostController::class, 'postUpdate']);

Route::post('commentAdd/{id}', [PostController::class, 'commentAdd']);

Route::get('/userList', [DashboardController::class, 'userList']);
Route::get('/userProfile', [DashboardController::class, 'userProfile']);
