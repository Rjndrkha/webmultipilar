<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;

class CountController extends Controller
{
    
    public function index()
    {
        $counts = Count::all();
        return view('pages.admin.count', ['counts' => $counts]);
    }


    public function edit($id)
    {
        $count = Count::find($id);
        return view('pages.admin.edit-count', compact('count'));
    }

    public function update(Request $request, $id)
    {
        $count = Count::find($id);
        $count->update([
            'klien' => $request->klien,
            'ahli' => $request->ahli,
            'symfoni' => $request->symfoni,
            'mobile' => $request->mobile,
            'background' => $request->background->store('images/background/')
        ]);
        return redirect()->route('/multipilar/admin/count');
    }


}
