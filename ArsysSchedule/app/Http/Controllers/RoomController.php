<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use App\Models\Building;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $build = Building::all();
        $items = Room::get();

        return view('pages.room.index')->with([
            'items' => $items,
            'build' => $build 
        ]);
    }

    public function show($uniqueid)
    {
        $item = Room::findOrFail($uniqueid);

        return view('pages.room.show')->with([
            'item' => $item
        ]);
    }

    public function edit($uniqueid)
    {
        $item = Room::findOrFail($uniqueid);

        return view('pages.room.edit')->with([
            'item' => $item
        ]);
    }

    public function update(Request $request, $uniqueid)
    {
        $data = $request->all();

        $item = Room::findOrFail($uniqueid);

        Room::where('uniqueid', $item->uniqueid)
            ->update([
                // 'external_uid' => $data['external_uid'],
                // 'session_id' => $data['session_id'],
                'building_id' => $data['building_id'],
                'room_number' => $data['room_number'],
                'capacity' => $data['capacity'],
                'coordinate_x' => $data['coordinate_x'],
                'coordinate_y' => $data['coordinate_y'],
                // Add other fields as needed
            ]);

        return redirect()->route('room.index')->with('status', 'Data berhasil diubah!');
    }

    public function create()
    {
        $item = Room::orderByDesc('uniqueid')->first();

        // Fetch necessary data for dropdowns, if needed

        return view('pages.room.create')->with([
            'item' => $item,
            // Pass other data to the view as needed
        ]);
    }

    public function store(RoomRequest $request)
    {
        $data = $request->all();

        $latestRoom = Room::orderByDesc('uniqueid')->first();

        $newUniqueId = $latestRoom->uniqueid + 1;

        Room::create([
            'uniqueid' => $newUniqueId,
            'external_uid' => $data['external_uid'],
            'session_id' => $data['session_id'],
            'building_id' => $data['building_id'],
            'room_number' => $data['room_number'],
            'capacity' => $data['capacity'],
            'coordinate_x' => $data['coordinate_x'],
            'coordinate_y' => $data['coordinate_y'],
            // Add other fields as needed
        ]);

        return redirect()->route('room.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function destroy($uniqueid)
    {
        $item = Room::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('room.index')->with('status', 'Data berhasil dihapus!');
    }
}
