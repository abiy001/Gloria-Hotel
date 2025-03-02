<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\UserViewController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;
use App\Models\City;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    $facilities = Facility::all();
    return view('layouts/home', compact('facilities'));
}) -> name('home');

// Route::get('/booking', function () {
//     return view('layouts/booking');
// }) -> name('booking');

Route::get('/wedding', function () {
    return view('layouts/wedding');
}) -> name('wedding');

Route::get('/offers', function () {
    return view('layouts/offers');
}) -> name('offers');

Route::get('/hotels', function () {
    $cities = City::all();
    
    return view('layouts/hotels', compact('cities','cities'));
}) -> name('hotels');

Route::get('/hotels/{city}', function ($city) {
    $cities = City:: where ('city_name',$city) -> first();
    $hotels = Hotel:: all() -> where('city_id', $cities->id);
    
    return view('layouts/hotelsByCity', compact('cities','hotels'));
}) -> name('hotelsByCity');



Route::get('/hotels/{city}/{hotel}', [UserViewController::class, 'detail_hotel' ]) -> name('detailHotel');

Route::get('/hotels/{city}/{hotel}/{room}', [UserViewController::class, 'detail_room' ]) -> name('detailRoom');

Route::get('/login', [LoginController::class,'index']) -> name('login');

Route::get('/logout', [AuthController::class, 'logout']) -> name('logout');

Route::middleware(['auth',AuthAdmin :: class])->group(function () {
    Route::get('/dashboard/', [AdminController::class, 'index'])  -> name('dashboard');
    Route::get('/dashboard-facility', [AdminController::class, 'getFacility'])  -> name('facility.dashboard.view');
    Route::get('/dashboard-city', [AdminController::class, 'getCity'])  -> name('city.dashboard.view');
    Route::get('/dashboard-room', [AdminController::class, 'getRoom'])  -> name('room.dashboard.view');
    Route::get('/dashboard-roomType', [AdminController::class, 'getRoomType'])  -> name('roomType.dashboard.view');
    Route::get('/dashboard-hotel', [AdminController::class, 'getHotel'])  -> name('hotel.dashboard.view');
    Route::get('/dashboard-laporanbulanan', [AdminController::class, 'getLaporanBulanan'])  -> name('laporanbulanan.dashboard.view');


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
    Route::put('/reservation/accept/{id}', [ReservationController::class, 'accept']) -> name('reservation.verified');
    Route::put('/reservation/checkout/{id}', [ReservationController::class, 'checkout_room']) -> name('reservation.checkout');

    Route::delete('/room/delete/{id}', [RoomController::class, 'destroy']) -> name('room.delete');
    Route::delete('/facility/delete/{id}', [FacilityController::class, 'destroy']) -> name('facility.delete');
    Route::delete('/hotel/delete/{id}', [HotelController::class, 'destroy']) -> name('hotel.delete');
    Route::delete('/roomType/delete/{id}', [RoomTypeController::class, 'destroy']) -> name('roomType.delete');
    Route::delete('/city/delete/{id}', [CityController::class, 'destroy']) -> name('city.delete');
    Route::post('/city/submit', [CityController::class, 'post']) -> name('city.submit');
    
});

Route::middleware(['auth',AuthUser :: class])->group(function () {
    Route::get('/profile', function () { return view('layouts/profile/profile'); }) -> name('profile.dashboard.view');

    Route::get('/profile/reservasi', function () {
        $reservations = Reservation :: all() -> where('user_id', Auth::user() -> id) ;

         return view('layouts/profile/reservasi',compact('reservations'));
     }) -> name('profile.reservasi.view');

     Route::get('/profile/edit-profile', function () { return view('layouts/profile/edit-profile'); }) -> name('profile.edit-profile');

    Route::get('/booking', function () {

        $roomTypes= RoomType::all();
        $room1 = Room :: all() -> where('rooms_roomtype_id', 1) -> where('room_status', 'available');
        $room2 = Room :: all() -> where('rooms_roomtype_id', 2) -> where('room_status', 'available');

        $roomType1 = Reservation :: leftJoin('rooms', 'reservations.room_id', '=' , 'rooms.id') -> where('checkin_date', '>=', date('Y-m-d'))->where('checkout_date', '<=', date('Y-m-d', strtotime("+1 day")))->where('payment_status', 'pending') ->where('room_status', 'available') -> where('booking_status', 'cancel') -> where('rooms.rooms_roomtype_id', 1) -> get();


        $roomType2 = Reservation :: leftJoin('rooms', 'reservations.room_id', '=', 'rooms.id') -> where('rooms.room_status', 'available') -> where('booking_status', 'cancel') -> where('rooms.rooms_roomtype_id', 2) -> where('payment_status', 'pending') -> where('checkin_date', '>=', date('Y-m-d'))->where('checkout_date', '<=', date('Y-m-d', strtotime("+1 day"))) -> get();

         return view('layouts/booking', compact('roomTypes', 'room1', 'room2','roomType1', 'roomType2')); 
        }) -> name('booking.view');

    Route::get('/profile/riwayat', function () {
        $pending_reservations = Reservation::all() -> where('user_id', Auth::user() -> id)->where('payment_status', 'pending');

        $reservations = Reservation :: all() -> where('user_id', Auth::user() -> id) -> where('booking_status', 'checkout') ;

         return view('layouts/profile/riwayat', compact('reservations', 'pending_reservations'));
    }) -> name('profile.riwayat');

    Route::get('/profile/belum-bayar', function () {
        $reservations = Reservation :: all() -> where('user_id', Auth::user() -> id) -> where('payment_status', 'pending') -> where('booking_status', '!=' , 'cancel') ;

         return view('layouts/profile/belum-bayar', compact('reservations'));
    }) -> name('profile.riwayat.belumbayar');

    Route::get('/profile/proses', function () {
        $reservations = Reservation :: all() -> where('user_id', Auth::user() -> id) -> where('booking_status', 'pending') -> where('payment_status', 'paid') -> where('booking_status', '!=' , 'cancel') ;

        $pending_reservations = Reservation::all() -> where('user_id', Auth::user() -> id)->where('payment_status', 'pending');

         return view('layouts/profile/proses', compact('reservations','pending_reservations'));
    }) -> name('profile.riwayat.proses');

    Route::put('/user/edit/{id}', [AuthController::class, 'update']) -> name('user.edit');

    Route::get('/bayar/reservation/{id}', [UserViewController::class, 'bayarReservasi']) -> name('reservation.payment.view');
    
    Route::put('/reservation/payment/{id}', [ReservationController::class, 'payment']) -> name('reservation.payment');
    
    Route::put('/hotel/rating/{id}', [HotelController::class, 'giveRating']) -> name('hotel.rating');

    Route::post('/reservation/submit', [ReservationController::class, 'post']) -> name('reservation.submit');
    Route::post('/comment/submit/', [CommentController::class, 'submitComment']) -> name('comment.submit');
});

Route::post('/register/submit', [AuthController::class, 'submitRegistration']) -> name('register.submit');
Route::post('/login/submit', [AuthController::class, 'login']) -> name('login.submit');