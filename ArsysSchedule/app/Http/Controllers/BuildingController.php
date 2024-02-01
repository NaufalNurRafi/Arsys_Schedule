<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuildingRequest; // Change to your actual request class
use Illuminate\Http\Request;
use App\Models\Building; // Change to your actual model class
use Illuminate\Support\Facades\Hash;

class BuildingController extends Controller
{
    public function index()
    {
        $items = Building::get();

        return view('pages.building.index')->with([
            'items' => $items
        ]);
    }

    public function show($uniqueid)
    {
        $item = Building::findOrFail($uniqueid);

        return view('pages.building.show')->with([
            'item' => $item
        ]);
    }

    public function edit($uniqueid)
    {
        $item = Building::findOrFail($uniqueid);

        return view('pages.building.edit')->with([
            'item' => $item
        ]);
    }

    public function update(Request $request, $uniqueid)
    {
        $data = $request->all();

        $item = Building::findOrFail($uniqueid);

        Building::where('uniqueid', $item->uniqueid)
            ->update([
                'session_id' => $data['session_id'],
                'abbreviation' => $data['abbreviation'],
                'name' => $data['name'],
                'coordinate_x' => $data['coordinate_x'],
                'coordinate_y' => $data['coordinate_y'],
                'external_uid' => $data['external_uid'],
            ]);

        return redirect()->route('building.index')->with('status', 'Data berhasil diubah!');
    }

    public function create()
    {
        $item = Building::orderByDesc('uniqueid')->first();
        return view('pages.building.create')->with([
            'item' => $item
        ]);
    }

    public function store(BuildingRequest $request)
    {
        $data = $request->all();

        $latestBuilding = Building::orderByDesc('uniqueid')->first();

        $newUniqueId = $latestBuilding->uniqueid + 1;

        Building::create([
            'uniqueid' => $newUniqueId,
            'session_id' => $data['session_id'],
            'abbreviation' => $data['abbreviation'],
            'name' => $data['name'],
            'coordinate_x' => $data['coordinate_x'],
            'coordinate_y' => $data['coordinate_y'],
            'external_uid' => $data['external_uid'],
        ]);

        return redirect()->route('building.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function destroy($uniqueid)
    {
        $item = Building::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('building.index')->with('status', 'Data berhasil dihapus!');
    }
}
