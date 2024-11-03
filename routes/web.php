<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// AUTHENTICATION

// REGISTER
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(AuthMiddleware::class);
// DASHBOARD
Route::get('/dashboard', [AuthController::class, 'showDashboardPage'])->name('showDashboardPage')->middleware(AuthMiddleware::class);

//RESOURCE
// USERS
Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers')->middleware(AuthMiddleware::class);
Route::get('/users/create', [UserController::class, 'createUser'])->name('createUser')->middleware(AuthMiddleware::class);
Route::post('/users/store', [UserController::class, 'storeUser'])->name('storeUser')->middleware(AuthMiddleware::class);
