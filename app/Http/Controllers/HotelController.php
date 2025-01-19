<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
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
        $hotel -> city = $request -> city;
        $hotel -> hotel_image = $request-> hotel_image -> move('images/hotels', $imageName);
        $hotel-> save();
        // dd($hotel);
        session::flash('success','Add Hotel Successfully');
        return redirect() -> route('dashboard');
    }
}
