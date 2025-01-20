<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {

        $room = Room::all();

        return view('layouts/dashboard', compact('room'));
    }

    function editRoom($id) {
        $room = Room::findOrFail($id);
        
        return view('layouts/editRoom', compact('room'));
    }

    function editFacility($id) {
        $facility = Facility::findOrFail($id);
        
        return view('layouts/editFacility', compact('facility'));
    }

    function editHotel($id) {
        $hotel = Hotel::findOrFail($id);
        
        return view('layouts/editHotel', compact('hotel'));
    }
}
