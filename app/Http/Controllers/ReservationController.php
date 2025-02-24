<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    function post(Request $request) {
        $request->validate([
            'checkin_date' => 'required  | date',
            'checkout_date' => 'required | date',
            'guest_total' => 'required | integer',

        ]);

        $reservation = new Reservation();
        $reservation -> checkin_date = $request -> checkin_date;
        $reservation -> checkout_date = $request -> checkout_date;
        $reservation -> guest_total = $request -> guest_total;
        $reservation -> booking_status = 'pending';
        $reservation -> user_id = Auth::user()->id;
        $reservation-> save();
        // dd($reservation);
        session::flash('success','Reservation Successfully');
        return redirect() -> back();
    }


    function accept(Request $request, $id) {
        DB::table('reservations')->where('id',$id)->update([
            'booking_status' => 'verified',
            'room_id' => $request -> room_id
        ]);

        session::flash('success','Accept Reservation Successfully');
        return redirect() -> back();
        }

    function cancel(Request $request, $id) {
        DB::table('reservations')->where('id',$id)->update([
            'booking_status' => 'cancel',
            
        ]);

        session::flash('success','Accept Reservation Successfully');
        return redirect() -> back();
        }
}
