<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //

    public function index()
    {
        return view('pages.testimonial');
    }

    public function create()
    {
        return view('pages.admin.create-testimonial');
    }

    public function store(Request $request)
    {
        Testimonial::create([
            'name' => $request->name,
            'image' => $request->image->store('images'),
            'address' => $request->address,
            'description' => $request->description
        ]);
        return redirect('/home');
    }

    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view('pages.testimonial', ['testimonial' => $testimonial]);
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('pages.admin.edit-testimonial', ['testimonial' => $testimonial]);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->update([
            'name' => $request->name,
            'image' => $request->image->store('images'),
            'address' => $request->address,
            'description' => $request->description
        ]);
        return redirect('/home');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect('/home');
    }
    
}
