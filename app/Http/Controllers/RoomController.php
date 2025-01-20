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

    function update(Request $request, $id) {
        $request->validate([
            'room_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'room_number' => 'required | numeric ',
            'room_type' => 'required | string',
            'price_per_day' => 'required | numeric',
            'room_description' => 'required | string',
        ]);

        $imageName = time().'.'.$request->room_image->extension();

        $room = new Room();

        DB::table('rooms')->where('id',$id)->update([
            'room_number' => $request -> room_number,
            'room_type'=> $request -> room_type,
            'price_per_day' => $request -> price_per_day,
            'room_status' => $request -> room_status,
            'room_description' => $request -> room_description,
            'room_image' => $request-> room_image -> move('images/rooms', $imageName),
 

        ]);

        session::flash('success','Update Room Successfully');
        return redirect() -> route('editRoom.dashboard.view', ['id' => $id]);
        }

        public function destroy(Room $id)
            {
                $id->delete();
                

                session::flash('success','Delete Room Successfully');
                return redirect() -> route('editRoom.dashboard.view', ['id' => $id]);
            }
    }
