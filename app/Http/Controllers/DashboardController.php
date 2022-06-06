<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Banner;
use \App\Models\Team;

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
}
