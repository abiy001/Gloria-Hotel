<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;
use App\Models\RoomType;
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
    Route::get('/dashboard/', [AdminController::class, 'index'])  -> name('dashboard');
    Route::get('/dashboard-facility', [AdminController::class, 'getFacility'])  -> name('facility.dashboard.view');
    Route::get('/dashboard-city', [AdminController::class, 'getCity'])  -> name('city.dashboard.view');
    Route::get('/dashboard-room', [AdminController::class, 'getRoom'])  -> name('room.dashboard.view');
    Route::get('/dashboard-roomType', [AdminController::class, 'getRoomType'])  -> name('roomType.dashboard.view');
    Route::get('/dashboard-hotel', [AdminController::class, 'getHotel'])  -> name('hotel.dashboard.view');

    Route::get('/dashboard-room-edit/{id}', [AdminController::class, 'editRoom' ] )  -> name('editRoom.dashboard.view');
    Route::get('/dashboard-roomType-edit/{id}', [AdminController::class, 'editRoomType' ])  -> name('editRoomType.dashboard.view');
    Route::get('/dashboard-facility-edit/{id}', [AdminController::class, 'editFacility' ])  -> name('editFacility.dashboard.view');
    Route::get('/dashboard-city-edit/{id}', [AdminController::class, 'editCity' ])  -> name('editCity.dashboard.view');
    Route::get('/dashboard-hotel-edit/{id}', [AdminController::class, 'editHotel' ])  -> name('editHotel.dashboard.view');
    
    Route::get('/dashboard-room-add', [AdminController::class, 'addRoom' ])  -> name('addRoom.dashboard.view');
    Route::get('/dashboard-roomType-add', [AdminController::class, 'addRoomType' ])  -> name('addRoomType.dashboard.view');
    Route::get('/dashboard-facility-add', [AdminController::class, 'addFacility' ])  -> name('addFacility.dashboard.view');
    Route::get('/dashboard-city-add', [AdminController::class, 'addCity' ])  -> name('addCity.dashboard.view');
    Route::get('/dashboard-hotel-add', [AdminController::class, 'addHotel' ])  -> name('addHotel.dashboard.view');
    
    Route::post('/room/submit', [RoomController::class, 'post']) -> name('room.submit');
    Route::post('/facility/submit', [FacilityController::class, 'post']) -> name('facility.submit');
    Route::post('/hotel/submit', [HotelController::class, 'post']) -> name('hotel.submit');
    Route::post('/roomType/submit', [RoomTypeController::class, 'post']) -> name('roomType.submit');
    Route::post('/city/submit', [CityController::class, 'post']) -> name('city.submit');

    Route::put('/room/edit/{id}', [RoomController::class, 'update']) -> name('room.edit');
    Route::put('/facility/edit/{id}', [FacilityController::class, 'update']) -> name('facility.edit');
    Route::put('/hotel/edit/{id}', [HotelController::class, 'update']) -> name('hotel.edit');
    Route::put('/roomType/edit/{id}', [RoomTypeController::class, 'update']) -> name('roomType.edit');
    Route::put('/city/edit/{id}', [CityController::class, 'update']) -> name('city.edit');
    Route::put('/reservation/cancel/{id}', [ReservationController::class, 'cancel']) -> name('reservation.cancel');
    Route::put('/reservation/accept/{id}', [ReservationController::class, 'accept']) -> name('reservation.verifies');
    

    Route::delete('/room/delete/{id}', [RoomController::class, 'destroy']) -> name('room.delete');
    Route::delete('/facility/delete/{id}', [FacilityController::class, 'destroy']) -> name('facility.delete');
    Route::delete('/hotel/delete/{id}', [HotelController::class, 'destroy']) -> name('hotel.delete');
    Route::delete('/roomType/delete/{id}', [RoomTypeController::class, 'destroy']) -> name('roomType.delete');
    Route::delete('/city/delete/{id}', [CityController::class, 'destroy']) -> name('city.delete');

});

Route::middleware(['auth',AuthUser :: class])->group(function () {
    Route::get('/profile', function () { return view('layouts/profile'); }) -> name('profile');
});

Route::post('/register/submit', [AuthController::class, 'submitRegistration']) -> name('register.submit');
Route::post('/login/submit', [AuthController::class, 'login']) -> name('login.submit');