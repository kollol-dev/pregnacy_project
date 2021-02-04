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
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        if (Auth::guard($guard)->check() && Auth::user()->role == 'admin') {
            return redirect()->route('superadmin.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role == 'doctor') {
            return redirect()->route('admin.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role == 'patient') {
            return redirect()->route('university.dashboard.index');
        } else{
            return $next($request);
        }
    }
}
