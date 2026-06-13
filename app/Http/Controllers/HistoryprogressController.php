<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasite;
use App\Models\Historyprogress;

class HistoryprogressController extends Controller
{

    public function create($id)
    {
        $datasites = Datasite::findOrFail($id);
        return view('historyprogresses.create', compact('datasites'));
    }

    public function store(Request $request, $id)
    {

        $validate = $request->validate([
            'datasite_id' => 'required|exists:datasites,id',
            'detail' => 'required'
        ]);

        Historyprogress::create($validate);

        return redirect()
            ->route('datasites.show', $request->datasite_id)
            ->with('success', 'History progress berhasil ditambahkan');
    }
}
