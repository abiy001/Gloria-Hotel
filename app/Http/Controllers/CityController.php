<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    function post(Request $request) {
        $request->validate([
            'city_name' => 'required | string | unique:cities',
            'city_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $city = new City();
        $city -> city_name = $request -> city_name;
        $imageName = time().'.'.$request->city_image->extension();  
        $city -> city_image = $request-> city_image -> move('images/cities', $imageName);
        $city-> save();
        // dd($city);
        session::flash('success','Add City Type Successfully');
        return redirect() -> route('city.dashboard.view');
    
    }

    function update(Request $request, $id) {
        $request->validate([
            'city_name' => 'required | string | unique:cities',
            'city_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::table('city')->where('id',$id)->update([
            'city_name' => $request -> city_name,
            'city_image' => $request -> city_image,
        ]);

        session::flash('success','Update City Successfully');
        return redirect() -> route('city.dashboard.view');
        }
        public function destroy(City $id)
        {
            $id->delete();

            session::flash('success','Delete City Successfully');
            return redirect() -> route('city.dashboard.view');
        } 
}
