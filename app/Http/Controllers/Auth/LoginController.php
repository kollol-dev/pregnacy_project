<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $this->redirectTo = route('admin.dashboard.index');
        } elseif (Auth::check() && Auth::user()->role == 'doctor') {
            $this->redirectTo = route('shop.dashboard.index');
        } elseif (Auth::check() && Auth::user()->role == 'patient') {
            $this->redirectTo = route('reseller.dashboard.index');
        } else {
            $this->redirectTo = route('welcome');
        }

        $this->middleware('guest')->except('logout');
    }


    // After login where to go
    public function redirectAuth()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $redirectTo = 'admin.dashboard.index';
        } elseif (Auth::check() && Auth::user()->role == 'doctor') {
            $redirectTo = 'doctor.dashboard.index';
        } elseif (Auth::check() && Auth::user()->role == 'patient') {
            $redirectTo = 'patient.dashboard.index';
        } else {
            $redirectTo = 'welcome';
        }

        $this->middleware('guest')->except('logout');
        return $redirectTo;
    }

    // Login with Mobile or email
    public function loginWithEmailOrMobile(Request $request)
    {
        // dd($request);
        $this->validate($request, array(
            'email' => 'required | string | max:191',
            'password' => 'required | string | min:8',
        ));

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route($this->redirectAuth());
        } else {
            // toast('Does not match login Credentials', 'error')->autoClose(2000)->timerProgressBar();
            return redirect()->back();
        }
    }
}
