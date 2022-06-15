<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Consultation;

class ConsultationController extends Controller
{
    
    public function index()
    {
        return view('pages.konsultasi.index');
    }

    // store
    public function store(Request $request)
    {
       
        Consultation::create($request->all());
        return redirect('/konsultasi')->with('success', 'Pesan anda telah terkirim');
    }

    public function destroy($id)
    {
        $consultation = Consultation::find($id);
        $consultation->delete();
        return redirect('/multipilar/admin');
    }



}
