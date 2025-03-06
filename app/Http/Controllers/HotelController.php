<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HotelController extends Controller
{
    function post(Request $request) {
        $request->validate([
            'hotel_name' => 'required | string | unique:hotels',
            'hotel_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hotel_description' => 'required | string',
        ]);

        $imageName = time().'.'.$request->hotel_image->extension();  

        $hotel = new Hotel();
        $hotel -> hotel_name = $request -> hotel_name;
        $hotel -> hotel_description = $request -> hotel_description;
        $hotel -> city_id = $request -> city_id;
        $hotel -> hotel_image = $request-> hotel_image -> move('images/hotels', $imageName);
        $hotel-> save();
        // dd($hotel);
        session::flash('success','Add Hotel Successfully');
        return redirect() -> route('hotel.dashboard.view');
    }

    
    function update(Request $request, $id) {
        $request->validate([
            'hotel_name' => 'required | string ',
            'hotel_description' => 'required | string',

        ]);



        DB::table('hotels')->where('id',$id)->update([
            'hotel_name' => $request -> hotel_name,
            'hotel_description' => $request -> hotel_description,
            'city_id' => $request -> city_id,
        ]);

        session::flash('success','Update Hotel Successfully');
        return redirect() -> route('hotel.dashboard.view');
        }

    public function destroy(Hotel $id)
    {
            $id->delete();

            session::flash('success','Delete Hotel Successfully');
            return redirect() -> route('hotel.dashboard.view');
    }

    public function giveRating(Request $request,$id) {
        $reservation = Reservation :: all() ->where('id', $request -> id) -> first();

        DB::table('hotels')->where('id',$reservation -> rooms -> hotel -> id)->update([
            'total_rating' => $reservation -> rooms -> hotel -> total_rating + 1,
            'hotel_rating' => $reservation -> rooms -> hotel -> hotel_rating + $request -> hotel_rating ,
        ]);


        DB::table('reservations')->where('id',$id)->update([
            'booking_status' => 'commented',
        ]);


     
        return redirect() -> route('profile.riwayat');
    }
}