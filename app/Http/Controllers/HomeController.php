<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $blogs = Blog::orderBy('id', 'desc')->limit('3')->get();

        // if (Auth::check()) {

        //     $user = User::find(Auth::user()->id);

        //     foreach ($user->notifications as $notification) {
        //         echo $notification->type;
        //     }


        //     return view('welcome', compact(['blogs', 'user']));
        // }
        return view('welcome', compact(['blogs']));
    }


    public function getAllBlog()
    {
        $blogs = Blog::paginate(20);
        return view('blog', compact(['blogs']));
    }

    public function getAllBlogById($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('blog-single', compact(['blog']));
    }

    // public function getService($get_input)
    // {
    //     return view('service', compact(['get_input']));
    // }
    public function getService()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        if (Auth::user()->role != 'patient') {
            return redirect("/");
        }
        $service = Service::where('patient_id', Auth::user()->id)->orderBy('id', 'desc')->first();

        return view('service', compact(['service']));
    }


    public function getResult($id)
    {
        $service = Service::where('id', $id)->with('patient')->first();
        return view('service-result', compact(['service']));
    }


    public function getResultByPatient()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $services = Service::where('patient_id', Auth::user()->id)->get();
        return view('service-profile')->with('services', $services);
    }




    public function getArticle1st()
    {
        return view('1st-trimester');
    }

    public function getArticle2nd()
    {
        return view('2nd-trimester');
    }

    public function getArticle3rd()
    {
        return view('3rd-trimester');
    }
}
