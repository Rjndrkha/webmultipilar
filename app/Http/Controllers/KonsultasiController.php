<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Consultation;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('pages.konsultasi.index');
    }



}