<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

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
        return view('blog', compact(['blog']));
    }

    // public function getService($get_input)
    // {
    //     return view('service', compact(['get_input']));
    // }
    public function getService()
    {
        return view('service');
    }


    public function getResult($id)
    {
        $service = Service::where('id', $id)->with('patient')->first();
        return view('service-result', compact(['service']));
    }
}
