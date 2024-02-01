<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function index()
    {
        $items = Staff::get();

        return view('pages.staff.index')->with([
            'items' => $items
        ]);
    }


    public function show($uniqueid)
    {
        $item = Staff::findOrFail($uniqueid);

        return view('pages.staff.show')->with([
            'item' => $item
        ]);
    }

    public function edit($uniqueid)
    {
        $item = Staff::findOrFail($uniqueid);

        return view('pages.staff.edit')->with([
            'item' => $item
        ]);
    }


    public function update(Request $request, $uniqueid)
    {
        $data = $request->all();

        $item = Staff::findOrFail($uniqueid);

        Staff::where('uniqueid', $item->uniqueid)
            ->update([
                'external_uid' => $data['external_uid'],
                'fname' => $data['fname'],
                'mname' => $data['mname'],
                'lname' => $data['lname'],
                'pos_code' => $data['pos_code'],
                'dept' => $data['dept'],
                'pos_type' => null,
                'acad_title' => null,
                'campus' => null,

            ]);

        return redirect()->route('staff.index')->with('status', 'Data berhasil diubah!');
    }

    public function create()
    {
        $item = Staff::orderByDesc('uniqueid')->first();
        return view('pages.staff.create')->with([
            'item' => $item
        ]);
    }


    public function store(StaffRequest $request)
    {
        $data = $request->all();

        $latestStaff = Staff::orderByDesc('uniqueid')->first();

        $newUniqueId = $latestStaff->uniqueid + 1;

        Staff::create([
            'uniqueid' => $newUniqueId,
            'external_uid' => $data['external_uid'],
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'pos_code' => $data['pos_code'],
            'dept' => $data['dept'],
            'pos_type' => null,
            'acad_title' => null,
            'campus' => null,
        ]);

        return redirect()->route('staff.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function destroy($uniqueid)
    {
        $item = Staff::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('staff.index')->with('status', 'Data berhasil dihapus!');
    }

}
