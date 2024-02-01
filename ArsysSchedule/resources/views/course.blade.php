@extends('layouts.layout')

@section('content')
    <div class="container">
        {{-- notifikasi form validasi --}}
        @if ($errors->has('file'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('file') }}</strong>
            </span>
        @endif

        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $sukses }}</strong>
            </div>
        @endif

        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
            IMPORT EXCEL
        </button>

        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="/course/import_excel" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a href="/course/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Data Subject Area</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                    <th>No</th>
                                    <th>Course</th>
                                    <th>Itype</th>
                                    
                                    <th>Date Pattern</th>
                                    <th>Day</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Room</th>
                                    <th >Instructor</th class="text-center">
                                    </tr>
            </thead>
            <tbody>
    @php $i=1 @endphp
    @foreach($courses as $course)
    <tr class="text-center">
        <td>{{ $i++ }}</td>
        <td>{{ $course->course }}</td>
        <td>{{ $course->itype }}</td>
       
        <td>{{ $course->date_pattern }}</td>
        <td>{{ $course->day }}</td>
        <td>{{ $course->start_time }}</td>
        <td>{{ $course->end_time }}</td>
        <td>{{ $course->room }}</td>
        <td>{{ $course->instructor }}</td>
    </tr>
    @endforeach
</tbody>

        </table>
    </div>
    <div class="pagination">
            {{ $courses->links() }}
        </div>
@endsection
