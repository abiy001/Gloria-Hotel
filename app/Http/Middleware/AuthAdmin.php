<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {
            if(Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                session::flush('error', 'you are not admin');
                return redirect() -> route('home');
            }
        } else {
            session::flush('error', 'you have to login first');
            return redirect() -> route('home');
        }

    }
}
