<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Department;
use App\Models\DepartmentalInstructor; // Change the model name
use Illuminate\Http\Request;

class DepartmentalInstructorController extends Controller
{
    public function index()
    {
        $department = Department::get();
        $items = DepartmentalInstructor::get();

        return view('pages.departmental_instructor.index')->with([
            'items' => $items,
            'department' => $department
        ]);
    }

    public function show($uniqueid)
    {
        $item = DepartmentalInstructor::findOrFail($uniqueid);

        return view('pages.departmental_instructor.show')->with([
            'item' => $item
        ]);
    }

    public function edit($uniqueid)
    {
        $item = DepartmentalInstructor::findOrFail($uniqueid);

        return view('pages.departmental_instructor.edit')->with([
            'item' => $item
        ]);
    }

    public function update(Request $request, $uniqueid)
    {
        $data = $request->all();

        $item = DepartmentalInstructor::findOrFail($uniqueid);

        DepartmentalInstructor::where('uniqueid', $item->uniqueid)
            ->update([
                // 'external_uid' => $data['external_uid'],
                // 'career_acct' => $data['career_acct'],
                'lname' => $data['lname'],
                'fname' => $data['fname'],
                'mname' => $data['mname'],
                // Add other fields based on your table structure
            ]);

        return redirect()->route('departmental_instructor.index')->with('status', 'Data berhasil diubah!');
    }

    public function create()
    {
        $item = DepartmentalInstructor::orderByDesc('uniqueid')->first();
        return view('pages.departmental_instructor.create')->with([
            'item' => $item
        ]);
    }

    public function store(StaffRequest $request)
    {
        $data = $request->all();

        $latestInstructor = DepartmentalInstructor::orderByDesc('uniqueid')->first();

        $newUniqueId = $latestInstructor->uniqueid + 1;

        DepartmentalInstructor::create([
            'uniqueid' => $newUniqueId,
            // 'external_uid' => $data['external_uid'],
            // 'career_acct' => $data['career_acct'],
            'lname' => $data['lname'],
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            // Add other fields based on your table structure
        ]);

        return redirect()->route('departmental_instructor.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function destroy($uniqueid)
    {
        $item = DepartmentalInstructor::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('departmental_instructor.index')->with('status', 'Data berhasil dihapus!');
    }
    // In your controller method
public function showDashboard()
{
    // Assuming $item is an instance of a model or any other data you want to display
    $item = YourModel::find(1); // Replace YourModel with the actual model you are using

    // Other data you want to pass to the view
    $instructorCount = DepartmentalInstructor::count();
    

    return view('pages.dashboard.index', compact('item', 'instructorCount', 'courseCount'));
}

}
