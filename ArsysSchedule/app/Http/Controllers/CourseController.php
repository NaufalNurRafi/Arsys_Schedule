<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Session;
use App\Exports\CourseExport;
use App\Imports\CourseImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
{
    $courses = Course::paginate(15); // Assuming you want to paginate with 15 items per page
    // $courses = Course::all(); // Remove or comment out this line

    return view('course', compact('courses'));
}


    public function export_excel()
    {
        return Excel::download(new CourseExport, 'courses.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_course di dalam folder public
        $file->move('file_course', $nama_file);

        // import data
        Excel::import(new CourseImport, public_path('/file_course/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Courses Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/course');
    }
    
}
