<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// routes/web.php
use App\Http\Controllers\CourseController;



Route::middleware('auth:Administrator')->group(function () {

  

Route::get('/course', [CourseController::class, 'index']);
Route::get('/course/export_excel', [CourseController::class, 'export_excel']);
Route::post('/course/import_excel', [CourseController::class, 'import_excel']);

Route::get('/course/index', 'CourseController@index')->name('course.index');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('/course/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/course/{id}/update', [CourseController::class, 'update'])->name('course.update');
Route::delete('/course/{id}/destroy', [CourseController::class, 'destroy'])->name('course.destroy');
Route::post('/course/import_excel', [CourseController::class, 'import_excel']);
Route::get('/import-excel', 'CourseController@import_excel');

    // Route::get('/course', [CourseController::class, 'index']);
    Route::get('/course/export_excel', [CourseController::class, 'export_excel']);
    Route::post('/course/import_excel', [CourseController::class, 'import_excel']);
    // routes/web.php or routes/api.php
Route::get('/import-excel', 'CourseController@import_excel');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');
    Route::resource('building', 'BuildingController');
    Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('department', 'DepartmentController');
    Route::resource('departmental_instructor', 'DepartmentalInstructorController');
    Route::resource('staff', 'StaffController');
    Route::resource('student', 'StudentController');
    Route::resource('subject_area', 'SubjectAreaController');
    Route::resource('course_offering', 'CourseOfferingController');
    Route::resource('fakultas', 'FakultasController');
    Route::resource('gedung', 'GedungController');
    Route::resource('ruangan', 'RuanganController');
    Route::resource('room', 'RoomController');
    Route::resource('prodi', 'ProdiController');
    
    Route::resource('schedule', 'ScheduleController');
    Route::get('/schedule/{id}/create', 'ScheduleController@create');
    
    Route::resource('ta', 'TahunAkademikController');
    Route::post('/activeTa/{id}', 'TahunAkademikController@activeTa');
    
    Route::resource('kelas', 'KelasController');
    Route::get('kelas/{id}/add', 'KelasController@addMahasiswa');
    Route::post('/storeMahasiswa', 'KelasController@storeMahasiswa');
    Route::post('/deleteMahasiswa/{id}', 'KelasController@deleteMahasiswa');

    Route::get('/', 'HomeController@dashboard')->name('dashboard');
});

Route::middleware('auth:mahasiswa')->group(function () {
    Route::resource('krs', 'KrsController');
    Route::get('/mahasiswas','HomeController@mahasiswa');
    Route::get('/absens','HomeController@absen');
    Route::get('/nilais','HomeController@nilai');
    Route::get('nilai/{id}/print', 'NilaiController@print')->name('nilai.print');
});

Route::middleware('auth:dosen')->group(function () {
    Route::get('/dosens','HomeController@dosen');

    Route::resource('nilai', 'NilaiController');
    Route::get('/list-nilai','NilaiController@list')->name('nilai.list');
    Route::get('nilai/{id}/cetak', 'NilaiController@cetakDosen')->name('nilai.cetakDosen');

    Route::resource('absen', 'AbsenController');
    Route::get('/list-absen','AbsenController@list')->name('absen.list');
    Route::get('absen/{id}/cetak', 'AbsenController@cetak')->name('absen.cetak');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login2', 'AuthController@postlogin')->name('login2');
Route::post('/logout', 'AuthController@logout')->name('logout');


