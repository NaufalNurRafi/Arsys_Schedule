<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Student;
use App\User;
use App\Http\Requests\MahasiswaRequest;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller

{

    public function index()
    {
        $items = Student::get();

        return view('pages.student.index')->with([
            'items' => $items
        ]);
    }


    public function show($uniqueid)
    {
        $item = Student::findOrFail($uniqueid);

        return view('pages.student.show')->with([
            'item' => $item
        ]);
    }

    public function edit($uniqueid)
    {
        $item = Student::findOrFail($uniqueid);

        return view('pages.student.edit')->with([
            'item' => $item
        ]);
    }


    public function update(Request $request, $uniqueid)
    {
        $data = $request->all();

        $item = Student::findOrFail($uniqueid);

        Student::where('uniqueid', $item->uniqueid)
            ->update([
                'external_uid' => $data['external_uid'],
                'first_name' => $data['first_name'],
                'middle_name' => $data['middle_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                // 'dept' => $data['dept'],
                // 'pos_type' => null,
                // 'acad_title' => null,
                // 'campus' => null,

            ]);

        return redirect()->route('student.index')->with('status', 'Data berhasil diubah!');
    }

    public function create()
    {
        $item = Student::orderByDesc('uniqueid')->first();
        return view('pages.student.create')->with([
            'item' => $item
        ]);
    }


    public function store(StudentRequest $request)
    {
        $data = $request->all();

        $latestStudent = Student::orderByDesc('uniqueid')->first();

        $newUniqueId = $latestStudent->uniqueid + 1;

        Student::create([
            'uniqueid' => $newUniqueId,
            'external_uid' => $data['external_uid'],
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            // 'dept' => $data['dept'],
            // 'pos_type' => null,
            // 'acad_title' => null,
            // 'campus' => null,
        ]);

        return redirect()->route('student.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function destroy($uniqueid)
    {
        $item = Student::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('student.index')->with('status', 'Data berhasil dihapus!');
    }

}
