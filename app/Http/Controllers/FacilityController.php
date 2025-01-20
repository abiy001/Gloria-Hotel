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
            'faclity_name' => 'required | string | unique:faclites',
            'faclity_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'faclity_description' => 'required | string',

        ]);


        $imageName = time().'.'.$request->facility_image->extension();  

        $facility = new Facility();
        $facility -> facility_name = $request -> facility_name;
        $facility -> facility_description = $request -> facility_description;
        $facility -> facility_image = $request-> facility_image -> move('images/facilities', $imageName);
        $facility-> save();
        // dd($facility);
        session::flash('success','Add Facility Successfully');
        return redirect() -> route('dashboard');
    }

        function update(Request $request, $id) {
            $request->validate([
                'faclity_name' => 'required | string |',
                'faclity_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'faclity_description' => 'required | string',
    
            ]);
    
            $imageName = time().'.'.$request->facility_image->extension();
    
    
            DB::table('facilities')->where('id',$id)->update([
                'facility_name' => $request -> facility_name,
                'facility_description' => $request -> facility_description,
                'facility_image' => $request-> facility_image -> move('images/facilities', $imageName),
            ]);
    
            session::flash('success','Update Facility Successfully');
            return redirect() -> route('editFacility.dashboard.view', ['id' => $id]);
            } 
}
