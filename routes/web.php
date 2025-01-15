<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/home');
}) -> name('home');

// Route::get('/register', [AuthController ::class, 'showRegistration']) -> name('register.show');
Route::post('/register/submit', [AuthController::class, 'submitRegistration']) -> name('register.submit');
Route::post('/login/submit', [AuthController::class, 'login']) -> name('login.submit');