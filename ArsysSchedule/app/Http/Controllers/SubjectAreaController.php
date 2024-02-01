<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubjectAreaRequest;
use App\Models\SubjectArea;
use App\Models\Department;

class SubjectAreaController extends Controller
{
    public function index()
    {
        $items = SubjectArea::get();

        return view('pages.subject_area.index')->with([
            'items' => $items,
        ]);
    }

    public function show($uniqueid)
    {
        $item = SubjectArea::findOrFail($uniqueid);

        return view('pages.subject_area.show')->with([
            'item' => $item,
        ]);
    }

    public function edit($uniqueid)
    {
        $item = SubjectArea::findOrFail($uniqueid);
        $departments = Department::all(); // You may adjust this based on your actual relationship

        return view('pages.subject_area.edit')->with([
            'item' => $item,
            'departments' => $departments,
        ]);
    }

    public function create()
    {
        $item = SubjectArea::orderByDesc('uniqueid')->first();
        $departments = Department::all(); // You may adjust this based on your actual relationship

        return view('pages.subject_area.create')->with([
            'item' => $item,
            'departments' => $departments,
        ]);
    }

    public function destroy($uniqueid)
    {
        $item = SubjectArea::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('subject_area.index')->with('status', 'Data berhasil dihapus!');
    }

    public function update(Request $request, $uniqueid)
    {
        $data = $request->all();

        $item = SubjectArea::findOrFail($uniqueid);

        // Update data based on the form fields
        $item->update([
            'session_id' => $data['session_id'],
            'subject_area_abbreviation' => $data['subject_area_abbreviation'],
            'long_title' => $data['long_title'],
            'department_uniqueid' => $data['department_uniqueid'],
            'external_uid' => $data['external_uid'],
            'last_modified_time' => $data['last_modified_time'],
            'funding_dept_id' => $data['funding_dept_id'],
        ]);

        return redirect()->route('subject_area.index')->with('status', 'Data berhasil diubah!');
    }

    public function store(SubjectAreaRequest $request)
    {
        $data = $request->all();

        // Create data based on the form fields
        SubjectArea::create([
            'session_id' => $data['session_id'],
            'subject_area_abbreviation' => $data['subject_area_abbreviation'],
            'long_title' => $data['long_title'],
            'department_uniqueid' => $data['department_uniqueid'],
            'external_uid' => $data['external_uid'],
            'last_modified_time' => $data['last_modified_time'],
            'funding_dept_id' => $data['funding_dept_id'],
        ]);

        return redirect()->route('subject_area.index')->with('status', 'Data berhasil ditambahkan!');
    }
}
