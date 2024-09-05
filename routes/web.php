<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('index');
Route::get('/users/{id}', [UserController::class, 'getUser'])->name('getUser');