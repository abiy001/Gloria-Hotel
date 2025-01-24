<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoomTypeController extends Controller
{
    function post(Request $request) {
        $request->validate([
            'roomtype_name' => 'required | string | unique:room_types',
            'roomtype_description' => 'required | string',
            'roomtype_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price_per_day' => 'required | numeric',
        ]);

        $imageName = time().'.'.$request->roomtype_image->extension();  
        
        
        $roomtype = new RoomType();
        $roomtype -> roomtype_name = $request -> roomtype_name;
        $roomtype -> roomtype_description = $request -> roomtype_description;
        $roomtype -> roomtype_image = $request-> roomtype_image -> move('images/roomtypes', $imageName);
        $roomtype -> price_per_day = $request -> price_per_day;
        $roomtype -> guest = $request -> price_per_day;
        $roomtype -> save();
        // dd($room);
        session::flash('success','Add Room Type Successfully');
        return redirect() -> route('roomType.dashboard.view');
    
    }

    function update(Request $request, $id) {
        $request->validate([
            'roomtype_name' => 'required | string | unique:room_types',
            'roomtype_description' => 'required | string',
            'price_per_day' => 'required | numeric',
        ]);

        DB::table('room_types')->where('id',$id)->update([
            'roomtype_name' => $request -> roomtype_name,
            'roomtype_description'=> $request -> roomtype_description,
            'roomtype_image' => $request -> roomtype_image,
            'price_per_day' => $request -> price_per_day,
            'guest' => $request -> guest,
        ]);

        session::flash('success','Update Room Type Successfully');
        return redirect() -> route('roomType.dashboard.view');
        }

        public function destroy(RoomType $id)
        {
            $id->delete();

            session::flash('success','Delete Room Type Successfully');
            return redirect() -> route('roomType.dashboard.view');
        }
}
