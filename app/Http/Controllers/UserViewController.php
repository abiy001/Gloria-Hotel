<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserViewController extends Controller
{

    function detail_hotel($city,$hotel) {
        $hotel = Hotel::leftJoin('cities', 'hotels.id', '=', 'cities.id') -> where('hotel_name', $hotel)->where('cities.city_name', $city)->first();
    $facility = Facility::all();
    $roomtype = RoomType::all();

    return View ('layouts/detailHotel', compact('hotel','facility', 'roomtype'));
    }

    function detail_room($room) {
    //     $hotel = Hotel::findOrFail($room);
    // $facility = Facility::all();
    $roomtype = RoomType::findOrFail($room);

    return View ('layouts/detailRoom', compact('roomtype'));
    }


    
}
