<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
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

        ]);

        $roomNullExist = Room:: all() -> where('room_status', 'available') -> where('checkin_date','=', NULL) -> where('checkout_date','=', NULL) -> where('hotel_id',)-> where('hotel_id', $request -> hotel_id)-> count();
        $roomExist = Room:: all() -> where('room_status', 'available') -> where('checkout_date', '>=', $request -> checkin_date) -> where('hotel_id', $request -> hotel_id) -> count();

        $reservationExist = Reservation :: all() -> where('checkin_date', '>=', $request -> checkin_date)->where('checkout_date', '<=', $request -> checkout_date) -> where('user_id', Auth::user()->id) -> where('payment_status', 'pending')  -> count();

        if($roomExist > 0 && $reservationExist <= 0 || $roomNullExist > 0 && $reservationExist <= 0) {
            $reservation = new Reservation();
            $reservation -> guest_total = $request -> guest_total;
            $reservation -> checkin_date = $request -> checkin_date;
            $reservation -> checkout_date = $request -> checkout_date;
            $reservation -> room_type_id = $request -> room_type_id;
            $reservation -> payment_status = 'pending';
            $reservation -> booking_status = 'pending';
            $reservation -> user_id = Auth::user()->id;
            $reservation -> room_id = null;
            $reservation-> save();

            session::flash('success','Pay the bill in your profile');
            return redirect() -> route('profile.dashboard.view');
        } else if($reservationExist > 0) {

            session::flash('error','You have a pending reservation'); 
            return redirect() -> back();

        } else {
            session::flash('error','There is no available room');
            return redirect() -> back();
        }
    }


    function accept(Request $request, $id,) {
        $reservation = Reservation :: all() ->where('id', $id) -> first();
        
        DB::table('rooms')->where('id',$request -> room_id)->update([
            'checkin_date' => $reservation -> checkin_date,
            'checkout_date' => $reservation -> checkout_date,
            'room_status' => 'not available'

        ]);

        DB::table('reservations')->where('id',$id)->update([
            'booking_status' => 'verified',
            'room_id' => $request -> room_id,
        ]);     

            session::flash('success','Accept Reservation Successfully');
            return redirect() -> back();
        }

    function cancel(Request $request, $id) {
        DB::table('reservations')->where('id',$id)->update([
            'booking_status' => 'cancel',
        ]);

        
        
        session::flash('success','Cancel Reservation Successfully');
        return redirect() -> back();
    }

    function payment(Request $request, $id) {
        DB::table('reservations')->where('id',$id)->update([
            'payment_status' => 'paid',
        ]);
        
        session::flash('success','Payment Reservation Successfully');
        return redirect() -> route('profile.dashboard.view');
    }
    function checkout_room(Request $request, $id) {
        $reservation = Reservation :: all() ->where('id', $id) -> first();
        
        DB::table('rooms')->where('id',$reservation -> room_id)->update([
            'room_status' => 'available'

        ]);

        DB::table('reservations')->where('id',$id)->update([
            'booking_status' => 'checkout',
        ]);


        session::flash('success','Checkout Reservation Successfully');
        return redirect() -> back();
        }
}
