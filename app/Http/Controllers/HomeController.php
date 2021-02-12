<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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


    public function getAllBlog(){
        $blogs = Blog::paginate(20);
        return view('blog', compact(['blogs']));
    }
}
