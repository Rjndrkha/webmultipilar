<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    //menampilkan
    public function index()
    {
        $banners = \App\Models\Banner::all();
        return view('index', ['banners' => $banners]);
    }

    //store
    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string|max:255',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subtitle1' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner = new \App\Models\Banner;
        $banner->title1 = $request->title1;
        $banner->image1 = $request->image1->store('assets/images/banners', 'public');
        $banner->subtitle1 = $request->subtitle1;
        $banner->title2 = $request->title2;
        $banner->image2 = $request->image2->store('assets/images/banners', 'public');
        $banner->save();

        return redirect()->route('index')->with('status', 'Banner berhasil ditambahkan');
    }

}
