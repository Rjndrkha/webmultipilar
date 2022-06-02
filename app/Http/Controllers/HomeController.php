<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Banner;
use \App\Models\Service;
use \App\Models\DataCount;
use \App\Models\Blog;
use \App\Models\Team;
use \App\Models\Testimonial;
use \App\Models\Gallery;
use \App\Models\Count;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $banners = Banner::all();
        $services = Service::all();
        $teams = Team::all();
        $blogs = Blog::all();
        $testimonials = Testimonial::all();
        $galleries = Gallery::all();
        $counts = Count::all();

        return view('home', ['banners' => $banners,
                             'services' => $services, 
                             'teams' => $teams,
                             'blogs' => $blogs,'testimonials' => $testimonials,'galleries' => $galleries,
                             'counts' => $counts]);
    }
    
     //menampilkan banner in home
  
   

}
