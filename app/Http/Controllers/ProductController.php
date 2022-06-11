<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.product.index');
    }

    public function simfonibpr(){
        return view('pages.product.simfonibpr');
    }

    public function simfonilkm(){
        return view('pages.product.simfonilkm');
    }

    public function simfonibmt(){
        return view('pages.product.simfonibmt');
    }

    public function simfonimobile(){
        return view('pages.product.simfonimobile');
    }
}
