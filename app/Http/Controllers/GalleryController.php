<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //

    public function index()
    {
        return view('pages.gallery');
    }

    public function create()
    {
        return view('pages.admin.create-gallery');
    }

    public function store(Request $request)
    {
        Gallery::create([
            'title' => $request->title,
            'image' => $request->image->store('images'),
            'content' => $request->content,
            'category' => $request->category,
            'tag' => $request->tag,
            'author' => $request->author
        ]);
        return redirect('/home');
    }

    public function show($id)
    {
        $gallery = Gallery::find($id);
        return view('pages.gallery', ['gallery' => $gallery]);
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('pages.admin.edit-gallery', ['gallery' => $gallery]);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->update([
            'title' => $request->title,
            'image' => $request->image->store('images'),
            'content' => $request->content,
            'category' => $request->category,
            'tag' => $request->tag,
            'author' => $request->author
        ]);
        return redirect('/home');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
    }

}
