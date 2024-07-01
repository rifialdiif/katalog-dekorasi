<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()) {
                return $next($request);
            } else {
                return redirect('/block')->with('message', "Sorry!, you don't have access to this page");
            }
        } else {
            return redirect('/login')->with('message', 'You must be Signed in first!');
        }
    }
}
