<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Banner;

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
}
