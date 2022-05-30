<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Team;

class TeamController extends Controller
{
    
    public function index()
    {
        $teams = \App\Models\Team::all();
        return view('index', ['teams' => $teams]);
    }

    public function create()
    {
        return view('pages.admin.create-team');
    }

    public function store(Request $request)
    {
       

        Team::create([
            'name' => $request->name,
            'image' => $request->image->store('images'),
            'position' => $request->position,
        ]);

        return redirect()->route('home');

    }

    public function edit($id)
    {
        $team = \App\Models\Team::find($id);
        return view('pages.admin.edit-team', ['team' => $team]);
    }

    public function update(Request $request, $id)
    {
        $team = \App\Models\Team::find($id);
        $team->update([
            'name' => $request->name,
            'image' => $request->image->store('images'),
            'position' => $request->position,
        ]);
        return redirect('/home');
    }

    public function destroy($id)
    {
        $team = \App\Models\Team::find($id);
        $team->delete();
        return redirect('/home');
    }
}
