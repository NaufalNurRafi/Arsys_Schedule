<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseOfferingRequest;
use App\Models\CourseOffering;
use App\Models\DepartmentalInstructor;
use Illuminate\Http\Request;

class CourseOfferingController extends Controller
{

    public function index()
    {
        $instructors = DepartmentalInstructor::get(); // Fixed variable name
        $items = CourseOffering::get();

        return view('pages.course_offering.index')->with([
            'items' => $items,
            'instructors' => $instructors, // Fixed variable name
        ]);
    }

    public function show($uniqueid)
    {
        $item = CourseOffering::findOrFail($uniqueid);

        return view('pages.course_offering.show')->with([
            'item' => $item,
        ]);
    }

    public function edit($uniqueid)
    {
        $item = CourseOffering::findOrFail($uniqueid);

        return view('pages.course_offering.edit')->with([
            'item' => $item,
        ]);
    }

    public function update(CourseOfferingRequest $request, $uniqueid)
    {
        $data = $request->validated(); // Use validated data from the request

        $item = CourseOffering::findOrFail($uniqueid);

        $item->update($data);

        return redirect()->route('course_offering.index')->with('status', 'Data berhasil diubah!');
    }

    public function create()
    {
        $latestCourseOffering = CourseOffering::latest('uniqueid')->first(); // Use latest() method
        $item = $latestCourseOffering ? $latestCourseOffering : new CourseOffering(); // Handle case where no records exist

        return view('pages.course_offering.create')->with([
            'item' => $item,
        ]);
    }

    public function store(CourseOfferingRequest $request)
    {
        $data = $request->validated(); // Use validated data from the request

        $latestCourseOffering = CourseOffering::latest('uniqueid')->first();

        $newUniqueId = $latestCourseOffering ? $latestCourseOffering->uniqueid + 1 : 1; // Handle case where no records exist

        CourseOffering::create([
            'uniqueid' => $newUniqueId,
            'course_nbr' => $data['course_nbr'],
            'is_control' => $data['is_control'],
            'perm_id' => $data['perm_id'],
            'proj_demand' => $data['proj_demand'],
            // Add other fields based on the structure of the 'course_offering' table
        ]);

        return redirect()->route('course_offering.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function destroy($uniqueid)
    {
        $item = CourseOffering::findOrFail($uniqueid);
        $item->delete();

        return redirect()->route('course_offering.index')->with('status', 'Data berhasil dihapus!');
    }

}
