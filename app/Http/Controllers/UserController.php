<?php

namespace App\Http\Controllers;

// use models
use App\Models\User;

// helper functions
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class UserController extends Controller
{
    // login
    public function login(Request $request){
        if (!isset($request->email) || !isset($request->password)) {
            return response()->json([
                'message' => 'Invalid Request',
            ], 403);
        }

        if ((User::where('email', $request->email)->count()) == 0) {
            return redirect('login')->with('error', "Oppes! Email doesn't exist");
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $user['type'] = 'Admin';
            return redirect()->intended('/');
        } else {
            // return response()->json([
            //     'message' => "Invalid login credentials.",
            // ], 422);

            return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
        }
    }


    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect("/");
    }

}
