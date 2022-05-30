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




class LandingController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $services = Service::all();
        $teams = Team::all();
        $blogs = Blog::all();
        $testimonials = Testimonial::all();
        $galleries = Gallery::all();

        return view('index', ['banners' => $banners,
                             'services' => $services, 
                             'teams' => $teams,
                             'blogs' => $blogs,'testimonials' => $testimonials,'galleries' => $galleries,]);
    }
}
