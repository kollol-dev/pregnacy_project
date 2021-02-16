<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Notifications\CheckupAlert;
use App\Models\Service;

use Illuminate\Http\Request;
use DateTime;
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
            $this->redirectTo = route('welcome');
        } elseif (Auth::check() && Auth::user()->role == 'patient') {
            // $this->redirectTo = route('patient.dashboard.index');
            $this->redirectTo = route('welcome');
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
            $redirectTo = 'welcome';
        } elseif (Auth::check() && Auth::user()->role == 'patient') {
            // $redirectTo = 'patient.dashboard.index';
            $redirectTo = 'welcome';
        } else {
            $redirectTo = 'welcome';
        }

        $this->middleware('guest')->except('logout');
        return $redirectTo;
    }

    // Login with email
    public function loginWithEmailOrMobile(Request $request)
    {

        $this->validate($request, array(
            'email' => 'required | string | max:191',
            'password' => 'required | string | min:8',
        ));

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {


            // • First Visit		-8-12 Weeks
            // • Second Visit		- 20 weeks
            // • Third visit: 		-24 week
            // • 4rth Visit		- 30 Weeks
            // • 5th Visit		-34 weeks
            // • 6th  Visit		- 36 weeks
            // • 7th visit 		-37-40 weeks 





            // if(){
            $user = Auth::user();
            $service = Service::where('patient_id', $user->id)->orderBy('id', 'desc')->first();

            if (!isset($service)) {
                return redirect()->route($this->redirectAuth());
            }
            $now = new DateTime();
            if (!isset($serivce)) {
                return redirect()->route($this->redirectAuth());
            }
            $difference_in_weeks = floor($now->diff($service->created_at)->days / 7);


            if ($difference_in_weeks + $service->pregnancy_week < 8) {
                $week_remaining = 8 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            }
            
            // if ($difference_in_weeks + $service->pregnancy_week < 12) {
            //     $week_remaining = 12 - $difference_in_weeks + $service->pregnancy_week;
            //     $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . $week_remaining > 1 ? 'weeks' : 'week'));
            // }

            else if ($difference_in_weeks + $service->pregnancy_week < 20) {
                $week_remaining = 20 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            } else if ($difference_in_weeks + $service->pregnancy_week < 25) {
                $week_remaining = 25 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            } else if ($difference_in_weeks + $service->pregnancy_week < 30) {
                $week_remaining = 30 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            } else if ($difference_in_weeks + $service->pregnancy_week < 34) {
                $week_remaining = 34 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            } else if ($difference_in_weeks + $service->pregnancy_week < 36) {
                $week_remaining = 36 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            } else if ($difference_in_weeks + $service->pregnancy_week < 37) {
                $week_remaining = 37 - $difference_in_weeks + $service->pregnancy_week;
                $user->notify(new CheckupAlert('Please do your check up in ' . $week_remaining . ($week_remaining > 1 ? ' weeks' : ' week')));
            }



            return redirect()->route($this->redirectAuth());
        } else {
            // toast('Does not match login Credentials', 'error')->autoClose(2000)->timerProgressBar();
            return redirect()->back();
        }
    }
}
