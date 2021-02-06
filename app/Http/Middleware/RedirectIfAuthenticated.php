<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        
        if (Auth::guard($guard)->check() && Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role == 'doctor') {
            return redirect()->route('welcome');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role == 'patient') {
            return redirect()->route('welcome');
            // return redirect()->route('patient.dashboard.index');
        } else{
            return $next($request);
        }
    }
}
