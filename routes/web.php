<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('layouts/home');
}) -> name('home');

Route::get('/login', [LoginController::class,'index']) -> name('login');

Route::middleware(['auth',AuthAdmin :: class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])  -> name('dashboard');
});
Route::post('/register/submit', [AuthController::class, 'submitRegistration']) -> name('register.submit');
Route::post('/login/submit', [AuthController::class, 'login']) -> name('login.submit');