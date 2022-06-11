<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    
    public function index()
    {
        return view('pages.blog.index');
    }

    public function blog1(){
        return view('pages.blog.blog1');
    }
    
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.admin.create-blog', ['categories' => $categories, 'tags' => $tags]);
    }
    
    public function store(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'image' => $request->image->store('images/blog/'),
            'content' => $request->content,
            'category' => $request->category,
            'tag' => $request->tag,
            'author' => $request->author
        ]);
        return redirect('/home');
    }
    
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('pages.blog', ['blog' => $blog]);
    }
    
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.admin.edit-blog', ['blog' => $blog, 'categories' => $categories,
                                              'tags' => $tags]);
    }
    
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->update([
            'title' => $request->title,
            'image' => $request->image->store('images/blog/'),
            'content' => $request->content,
            'category' => $request->category,
            'tag' => $request->tag,
            'author' => $request->author,
            'updated_at' => now().' '.now()->format('H:i:s')
        ]);
        return redirect('/home');
    }
    
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/home');
    }

}
