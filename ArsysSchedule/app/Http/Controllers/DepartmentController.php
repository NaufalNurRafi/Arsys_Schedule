<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\DepartmentRequest;
use App\Models\Department;


class DepartmentController extends Controller
{
    public function index()
{
    // $instructor = DepartmentalInstructor::all();
    $items = Department::get();

    return view('pages.department.index')->with([
        'items' => $items,
        // 'instructor' => $instructor
    ]);
}
public function show($uniqueid)
{
    $item = Department::findOrFail($uniqueid);

    return view('pages.department.show')->with([
        'item' => $item
    ]);
}

public function edit($uniqueid)
{
    $item = Department::findOrFail($uniqueid);

    return view('pages.department.edit')->with([
        'item' => $item
    ]);
}

public function create()
{
    $item = Department::orderByDesc('uniqueid')->first();
    return view('pages.department.create')->with([
        'item' => $item
    ]);
}

public function destroy($uniqueid)
{
    $item = Department::findOrFail($uniqueid);
    $item->delete();

    return redirect()->route('department.index')->with('status', 'Data berhasil dihapus!');
}
public function update(Request $request, $uniqueid)
{
    $data = $request->all();

    $item = Department::findOrFail($uniqueid);

    // Lakukan update data sesuai kolom yang diperlukan
    $item->update([
        'abbreviation' => $data['abbreviation'],
        'name' => $data['name'],
        // ... sesuaikan dengan kolom lainnya
    ]);

    return redirect()->route('department.index')->with('status', 'Data berhasil diubah!');
}

public function store(DepartmentRequest $request)
{
    $data = $request->all();

    // Lakukan create data sesuai kolom yang diperlukan
    Department::create([
        'abbreviation' => $data['abbreviation'],
        'name' => $data['name'],
        // ... sesuaikan dengan kolom lainnya
    ]);

    return redirect()->route('department.index')->with('status', 'Data berhasil ditambahkan!');
}

}
