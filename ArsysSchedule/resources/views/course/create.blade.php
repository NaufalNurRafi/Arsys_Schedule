@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('course_offering.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card staff">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Add Course Offering</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course_offering.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Unique ID</label>
                                        <input type="text" class="form-control" name="uniqueid"
                                            class="form-control @error('uniqueid') is-invalid @enderror">
                                        @error('uniqueid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Course Number</label>
                                        <input type="text" class="form-control" name="course_nbr"
                                            class="form-control @error('course_nbr') is-invalid @enderror">
                                        @error('course_nbr')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            class="form-control @error('title') is-invalid @enderror">
                                        @error('title')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Instr Offr ID</label>
                                        <input type="text" class="form-control" name="instr_offr_id"
                                            class="form-control @error('instr_offr_id') is-invalid @enderror">
                                        @error('instr_offr_id')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Department</label>
                                        <input type="text" class="form-control" name="department_uniqueid"
                                            class="form-control @error('department_uniqueid') is-invalid @enderror">
                                        @error('department_uniqueid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Add other form fields for the course_offering table here -->
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Add Course Offering</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
