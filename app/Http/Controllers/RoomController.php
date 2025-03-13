<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    
    function post(Request $request) {
        $request->validate([
            'room_number' => 'required  | numeric | unique:rooms',
            'rooms_roomtype_id' => 'required | numeric',

        ]);

        $room = new Room();
        $room -> room_number = $request -> room_number;
        $room -> rooms_roomtype_id = $request -> rooms_roomtype_id;
        $room -> room_status = 'available';
        $room -> hotel_id = $request -> hotel_id;
        $room-> save();
        // dd($room);
        session::flash('success','Add Room Successfully');
        return redirect() -> route('room.dashboard.view');
    }

    function update(Request $request, $id) {
        $request->validate([
            'room_number' => 'required | numeric ',
            'rooms_roomtype_id' => 'required | numeric',
           
        ]);

        DB::table('rooms')->where('id',$id)->update([
            'room_number' => $request -> room_number,
            'rooms_roomtype_id'=> $request -> rooms_roomtype_id,
            'room_status' => $request -> room_status,
            'hotel_id' => $request -> hotel_id,
        ]);

        session::flash('success','Update Room Successfully');
        return redirect() -> route('room.dashboard.view');
        }

         function destroy(Room $id)
            {
                $id->delete();
                
                session::flash('success','Delete Room Successfully');
                return redirect() -> route('room.dashboard.view');
            }
    }
