<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomType;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {

        $reservation = Reservation :: all();
        $rooms = Room::all()  -> where('checkout_date', '<=', date('Y-m-d')  ) -> where('room_status', 'available') -> where('hotel_id', );

        return view('layouts/dashboard/index', compact('reservation','rooms'));
    }

    function getRoom(Request $request) {
        $roomtypes = RoomType::all();
        
        $query = Room::query();

        if ( $request -> sort ==  'nomorKamarTerkecil') {
            $query -> orderBy('room_number', 'asc') ;
            $room =  $query -> get() ;
        } else if ($request -> sort ==  'nomorKamarTerbesar')  {
            $query -> orderBy('room_number', 'desc') ;
            $room =  $query -> get() ;
        } else if ($request -> sort ==  'available') {
            $query -> where('room_status', 'available') ;
            $room =  $query -> get() ;
        }  else {
            $query ;
            $room =  $query -> get() ;
        }


        return view('layouts/dashboard/room', compact('roomtypes','room'));
    }

    function getFacility() {

        $facility = Facility::all();

        return view('layouts/dashboard/facility', compact('facility'));
    }

    function getCity() {
        $city = City::all();
        // $city = City::all();

        return view('layouts/dashboard/city', compact('city'));
    }

    function getHotel() {
        $hotel = Hotel::all();
        // $cities = City::all();

        return view('layouts/dashboard/hotel', compact('hotel' ));
    }

    function getRoomType() {
        $roomType = RoomType::all();
        // $cities = City::all();

        return view('layouts/dashboard/roomType', compact('roomType' ));
    }
    
    function getLaporanBulanan() {
        $reservation = Reservation::all() -> where('booking_status', 'verified' || 'checkout') -> where('payment_status', 'paid') ;        

        return view('layouts/dashboard/laporanBulanan', compact('reservation'));
    }

    function addRoom() {  
        $roomType = RoomType::all();
        $hotels = Hotel::all();
        
        return view('layouts/dashboard/addRoom', compact('roomType','hotels'));
    }

    function addFacility() {        
        return view('layouts/dashboard/addFacility');
    }


    function addHotel() {
        $city = City::all();

        return view('layouts/dashboard/addHotel', compact('city'));
    }

    function addRoomType() { 
        
        return view('layouts/dashboard/addRoomType');
    }

    function addCity() {       
        
        return view('layouts/dashboard/addCity');
    }
 
    function editRoom($id) {
        $room = Room::findOrFail($id);
        $roomType = RoomType::all();
        $hotels = Hotel::all();

        return view('layouts/dashboard/editRoom', compact('room','roomType' ,'hotels'));
    }


    function editFacility($id) {
        $facility = Facility::findOrFail($id);
        
        return view('layouts/dashboard/editFacility', compact('facility'));
    }

    function editHotel($id) {
        $hotel = Hotel::findOrFail($id);
        $city = City::all();

        return view('layouts/dashboard/editHotel', compact('hotel','city'));
    }

    function editRoomType($id) {
        $roomType = RoomType::findOrFail($id);
        
        return view('layouts/dashboard/editRoomType', compact('roomType'));
    }

    function editCity($id) {
        $city = City::findOrFail($id);
        
        return view('layouts/dashboard/editCity', compact('city'));
    }


}
