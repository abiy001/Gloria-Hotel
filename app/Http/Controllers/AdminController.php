<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {

        $room = Room::all();

        return view('layouts/dashboard/index', compact('room'));
    }

    function getRoom() {

        $room = Room::all();

        return view('layouts/dashboard/room', compact('room'));
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

    function addRoom() {        
        return view('layouts/dashboard/addRoom');
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
        
        return view('layouts/dashboard/editRoom', compact('room'));
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
