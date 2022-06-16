<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Banner;
use \App\Models\Team;
use \App\Models\Blog;
use \App\Models\Testimonial;
use \App\Models\Gallery;
use \App\Models\Count;
use \App\Models\Consultation;
use \App\Models\Service;
use \App\Models\DataCount;
use \App\Models\User;
use \App\Models\Product;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Promise\Create;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    // middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    //CRUD ADD USER 
    public function index()
    {
        $consultations = Consultation::all();
        $user = User::all();
        return view('pages.admin.index',[
        'users' => $user,
        'consultations' => $consultations,]);
        
    }
    public function storeuserr()
    {
        
        return view('pages.admin.adduser');
    }
    public function storeuser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

       
        return redirect('/multipilar/admin');
    }

    public function edit(Request $request)
    {
        $id = $request->get('id');
        $users = User::find($id);
        return view('pages.admin.edituser', compact("users"));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $users = User::find($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $users->save();
        return redirect('/multipilar/admin');
    }

    public function delete($id) {
        
        $users = User::find($id);
        $users->delete();

        return redirect('/multipilar/admin');
    }
    //END CRUD USER 

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
        return view('pages.admin.gallery', ['galleries' => $galleries]);
    }

    public function indexcount()
    {
        
        $counts = Count::all();
        return view('pages.admin.count', ['counts' => $counts]);
    }

    // index consultatin
    public function indexconsultation()
    {
        $consultations = Consultation::all();
        return view('pages.admin.consultation', ['consultations' => $consultations]);
    }

    // index product
    public function indexproduct()
    {
        $products = Product::all();
        return view('pages.admin.product',['products' => $products]);
    }
}
