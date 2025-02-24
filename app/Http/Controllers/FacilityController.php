<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FacilityController extends Controller
{
    function post(Request $request) {
        $request->validate([
            'facility_name' => 'required | string | unique:facilities',
            'facility_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facility_description' => 'required | string',

        ]);


        $imageName = time().'.'.$request->facility_image->extension();  

        $facility = new Facility();
        $facility -> facility_name = $request -> facility_name;
        $facility -> facility_image = $request-> facility_image -> move('images/facilities', $imageName);
        $facility -> facility_description = $request -> facility_description;
        $facility-> save();
        // dd($facility);
        session::flash('success','Add Facility Successfully');
        return redirect() -> back();
    }

        function update(Request $request, $id) {
            $request->validate([
                'facility_name' => 'required | string |',
                'facility_description' => 'required | string',
    
            ]);
    
    
    
            DB::table('facilities')->where('id',$id)->update([
                'facility_name' => $request -> facility_name,
                'facility_description' => $request -> facility_description,
            ]);
    
            session::flash('success','Update Facility Successfully');
            return redirect() -> back();
            } 

        public function destroy(Facility $id)
        {
                $id->delete();

                session::flash('success','Delete Facility Successfully');
                return redirect() -> back();
        }
}
