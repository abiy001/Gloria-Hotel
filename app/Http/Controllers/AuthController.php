<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function showRegistration() : View {
        return view('layouts/register');
    }

    function submitRegistration(Request $request) {
        $user = new User();
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> role = 'user';
        $user-> save();
        // dd($user);
        return redirect() -> route('layouts/navbar');
    }

    function login(Request $request) {
       $data = $request-> only('email','password');

       if(Auth::attempt($data)) {
           if(Auth::user()->role == 'admin') {
               $request->session()->regenerate();
               session::flash('success','login successfully');
               return redirect() -> route('dashboard');
            } else {
                $request->session()->regenerate();
                session::flash('success','login successfully');
            return redirect() -> route('home');
        }
       } else {
        session::flash('error', 'password or email is wrong');
        return redirect() -> route('home');
       }
    }
}
