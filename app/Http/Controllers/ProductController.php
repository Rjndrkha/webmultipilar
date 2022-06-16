<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();

        return view('pages.admin.product',['products' => $products]);
    }

    // edit
    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.admin.edit-product', ['product' => $product]);
    }

    // update
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'banner'=>$request->banner,
            'tittle'=>$request->tittle,
            'image'=>$request->image->store('images/product/'),
            'overview'=>$request->overview,
        ]);
        return redirect('/multipilar/admin/product');
    }

    // destroy
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/multipilar/admin/product');
    }
   


    // public function simfonibpr(){
    //     return view('pages.product.simfonibpr');
    // }

    // public function simfonilkm(){
    //     return view('pages.product.simfonilkm');
    // }

    // public function simfonibmt(){
    //     return view('pages.product.simfonibmt');
    // }

    // public function simfonimobile(){
    //     return view('pages.product.simfonimobile');
    // }


}
