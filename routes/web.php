<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::group(['controller' => AuthController::class], function () {
    Route::get('/register', 'showRegisterForm')->name('showRegisterForm');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'showLoginForm')->name('showLoginForm');
    Route::post('/login', 'login')->name('login');

    // Protected auth routes
    Route::middleware(AuthMiddleware::class)->group(function () {
        Route::post('/logout', 'logout')->name('logout');
        Route::get('/dashboard', 'showDashboardPage')->name('showDashboardPage');
    });
});

// User resource routes
Route::group([
    'prefix' => 'users',
    'controller' => UserController::class,
    'middleware' => AuthMiddleware::class
], function () {
    Route::get('/', 'showAllUsers')->name('showAllUsers');
    Route::get('/create', 'createUser')->name('createUser');
    Route::post('/store', 'storeUser')->name('storeUser');
});
