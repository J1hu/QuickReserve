<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// USERS
Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');
