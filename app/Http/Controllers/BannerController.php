<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Banner;

class BannerController extends Controller
{
    
    //menampilkan
    public function index()
    {
        $banners = \App\Models\Banner::all();
        return view('index', ['banners' => $banners]);
    }


    //post banner
    public function postBanner(Request $request)
    {
        
        Banner::create($request->all());
        return redirect('/home');
        
    }

    // edit
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('pages.admin.edit-banner', ['banner' => $banner]);
    }

    //update
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->update([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'image1' => $request->image1->store('images'),
            'image2' => $request->image2->store('images'),
            'subtitle1' => $request->subtitle1,
            'description1' => $request->description1,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);
        return redirect('/home');
    }

}
