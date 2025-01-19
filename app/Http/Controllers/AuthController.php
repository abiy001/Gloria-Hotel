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

        $request->validate([
            'name' => 'required | string',
            'username' => 'required | string',
            'email' => 'required | email | unique:users',
            'password' => 'required | string',
            'nohp' => 'required | numeric',
        ]);

        $user = new User();
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> role = 'user';
        $user -> nohp = $request -> nohp;
        $user-> save();
        // dd($user);
        session::flash('success','register successfully');
        return redirect() -> route('home');
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


    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session::flash('success','logout successfully');
        return redirect() -> route('home');
    }
}
