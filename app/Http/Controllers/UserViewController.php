<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comments;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserViewController extends Controller
{

    function detail_hotel($city, $hotel) {
        $hotels = Hotel::leftJoin('cities', 'hotels.id', '=', 'cities.id') -> where('hotels.hotel_name', $hotel)->where('cities.city_name', $city)->first();
        $facility = Facility::all();
        $roomtype = RoomType::all();
        $comments = Comments ::leftJoin('hotels', 'comments.hotel_id', '=', 'hotels.id') -> where('hotels.hotel_name', $hotel)->get();

    return View ('layouts/detailHotel', compact('hotels','facility', 'roomtype','comments'));
    }

    function detail_room($hotel,$city, $room) {
    //     $hotel = Hotel::findOrFail($room);
    // $facility = Facility::all();
    $roomtype = RoomType::findOrFail($room);

    return View ('layouts/detailRoom', compact('roomtype'));
    }

}
