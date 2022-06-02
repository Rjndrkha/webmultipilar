<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = \App\Models\Service::all();
        return view('index', ['services' => $services]);
    }

    public function create()
    {
        return view('pages.admin.create-service');
    }

    public function store(Request $request)
    {
        \App\Models\Service::create([
            'title'=>$request->title,
            'image'=>$request->image->store('images/service/'),
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
        ]);
        
        return redirect('/home');
    }

    public function edit($id)
    {
        $service = \App\Models\Service::find($id);
        return view('pages.admin.edit-service', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $service = \App\Models\Service::find($id);
        $service->update([
            'title'=>$request->title,
            'image'=>$request->image->store('images/service/'),
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
        ]);
        return redirect('/home');
    }

    public function destroy($id)
    {
        $service = \App\Models\Service::find($id);
        $service->delete();
        return redirect('/home');
    }
}
