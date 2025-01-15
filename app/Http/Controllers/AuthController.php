<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
               return redirect() -> route('layouts/register');
            } else {
            $request->session()->regenerate();
            return redirect() -> route('home');
        }
       }
    }
}
