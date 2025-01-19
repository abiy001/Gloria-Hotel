<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    
    function post(Request $request) {
        $request->validate([
            'room_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'room_number' => 'required  | numeric | unique:rooms',
            'room_type' => 'required | string',
            'price_per_day' => 'required | numeric',
            'room_description' => 'required | string',

        ]);

        $imageName = time().'.'.$request->room_image->extension();  

        $room = new Room();
        $room -> room_number = $request -> room_number;
        $room -> room_type = $request -> room_type;
        $room -> price_per_day = $request -> price_per_day;
        $room -> room_status = 'available';
        $room -> room_description = $request -> room_description;
        $room -> room_image = $request-> room_image -> move('images/rooms', $imageName);
        $room-> save();
        // dd($room);
        session::flash('success','Add Room Successfully');
        return redirect() -> route('dashboard');
    }
}
