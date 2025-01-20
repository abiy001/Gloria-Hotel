<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('layouts/home');
}) -> name('home');

Route::get('/detail-hotel', function () {
    return view('layouts/detailHotel');
}) -> name('detailHotel');

Route::get('/detail-room', function () {
    return view('layouts/detailRoom');
}) -> name('detailRoom');

Route::get('/login', [LoginController::class,'index']) -> name('login');

Route::get('/logout', [AuthController::class, 'logout']) -> name('logout');

Route::middleware(['auth',AuthAdmin :: class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])  -> name('dashboard');
    Route::get('/dashboard/room-edit/{id}', [AdminController::class, 'editRoom' ])  -> name('editRoom.dashboard.view');
    Route::get('/dashboard/facility-edit/{id}', [AdminController::class, 'editFacility' ])  -> name('editFacility.dashboard.view');
    Route::get('/dashboard/hotel-edit/{id}', [AdminController::class, 'editHotel' ])  -> name('editHotel.dashboard.view');
    
    Route::post('/room/submit', [RoomController::class, 'post']) -> name('room.submit');
    Route::post('/facility/submit', [FacilityController::class, 'post']) -> name('facility.submit');
    Route::post('/hotel/submit', [HotelController::class, 'post']) -> name('hotel.submit');

    Route::put('/room/edit/{id}', [RoomController::class, 'update']) -> name('room.edit');
    Route::put('/facility/edit/{id}', [FacilityController::class, 'update']) -> name('facility.edit');
    Route::put('/hotel/edit/{id}', [HotelController::class, 'update']) -> name('hotel.edit');

});

Route::middleware(['auth',AuthUser :: class])->group(function () {
    Route::get('/profile', function () { return view('layouts/profile'); }) -> name('profile');
});

Route::post('/register/submit', [AuthController::class, 'submitRegistration']) -> name('register.submit');
Route::post('/login/submit', [AuthController::class, 'login']) -> name('login.submit');