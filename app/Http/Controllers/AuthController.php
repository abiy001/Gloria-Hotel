<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            'password' => 'required | string | min:8',
            'nohp' => 'required  | numeric | digits_between:10,13',
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
        // session::flash('success','register successfully');
        return redirect() -> route('home') -> with('success','register successfully');
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
                return redirect() -> route('home') -> with('success','login successfully');
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

    function update(Request $request, $id) {
        $request->validate([
            'name' => 'required | string | ',
            'username' => 'required | string |',
            'nohp' => 'required | numeric |',
        ]);

        DB::table('users')->where('id', $id)->update([
            'name' => $request -> name,
            'username' => $request -> username,
            'nohp' => $request -> nohp,
        ]);

        session::flash('success','Update user Successfully');
        return redirect() -> route('profile.dashboard.view');
        }
       
}
