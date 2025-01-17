<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {
            if(Auth::user()->role == 'user') {
                session::flash('success','login successfully');
                return $next($request);
            } else {
                session::flush('error', 'you are not user');

                return redirect() -> route('home');
            }
        } else {
            session::flush('error', 'you have to login first');
            return redirect() -> route('home');
        }

    }
}
