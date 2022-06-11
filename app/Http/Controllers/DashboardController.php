<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Banner;
use \App\Models\Team;
use \App\Models\Blog;
use \App\Models\Testimonial;
use \App\Models\Gallery;
use \App\Models\Count;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }

    public function indexbanner()
    {
        $banners = Banner::all();
        return view('pages.admin.banner', ['banners' => $banners,]);
    }

    public function indexteam()
    {
        
        $teams = Team::all();
        return view('pages.admin.team', ['teams' => $teams]);
    }

    public function indexblog()
    {
        
        $blogs = Blog::all();
        return view('pages.admin.blog', ['blogs' => $blogs]);
    }

    public function indextestimonial()
    {
        
        $testimonials = Testimonial::all();
        return view('pages.admin.testimonial', ['testimonials' => $testimonials]);
    }

    public function indexgallery()
    {
        
        $galleries = Gallery::all();
        return view('pages.admin.gallery', ['gallerys' => $galleries]);
    }

    public function indexcount()
    {
        
        $counts = Count::all();
        return view('pages.admin.count', ['counts' => $counts]);
    }
}
