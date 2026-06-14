<?php

namespace App\Http\Controllers;

use App\Models\Datasite;
use App\Models\Historyprogress;
use App\Models\Statusproject;
use App\Models\Mitra;
use Illuminate\Http\Request;

class DatasiteController extends Controller
{
    public function index()
    {
        $datasites = Datasite::all();
        return view('datasites.index', compact('datasites'));
    }

    public function show($id)
    {
        $datasites = Datasite::findOrFail($id);
        $historyprogresses = Historyprogress::where('datasite_id', $id)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('datasites.show', compact('datasites', 'historyprogresses'));
    }

    public function create()
    {
        $mitras = Mitra::all();
        $statusprojects = Statusproject::all();
        return view('datasites.create', compact('mitras', 'statusprojects'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'site_id' => 'required',
            'site_name' => 'required|string',
            'long' => 'required|string',
            'lat' => 'required|string',
            'kabupaten' => 'required|string',
            'mitra_id' => 'required',
            'statusproject_id' => 'required',
            'catatan' => 'sometimes|string',
        ]);

        // Jika berhasil

        Datasite::create($validate);

        return redirect()->route('datasites.index')->with('success', 'Datasite ' . $validate['site_id'] . ' created successfully.');
    }

    public function edit(Datasite $datasite)
    {
        $mitras = Mitra::all();
        $statusprojects = Statusproject::all();
        return view('datasites.edit', compact('datasite', 'mitras', 'statusprojects'));
    }

    public function update(Request $request, Datasite $datasite)
    {
        $validate = $request->validate([
            'site_id' => 'required|unique:datasites,site_id',
            'site_name' => 'required|string',
            'long' => 'required|string',
            'lat' => 'required|string',
            'kabupaten' => 'required|string',
            'mitra_id' => 'required',
            'statusproject_id' => 'required',
            'catatan' => 'sometimes|string',
        ],
        [
            'site_id.unique' => 'Site ID sudah terdaftar.',
            'site_id.required' => 'Site ID wajib diisi.',
        ]
        );

        // Jika berhasil validasi, maka update data

        $datasite->update($validate);

        return redirect()->route('datasites.index')->with('success', 'Datasite ' . $validate['site_id'] . ' updated successfully.');
    }

    public function destroy(Datasite $datasite)
    {
        $datasite->delete();

        return redirect()->route('datasites.index')->with('success', 'Site ID ' . $datasite->site_id . ' deleted successfully.');
    }
}
