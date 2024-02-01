@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('subject_area.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card staff">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Add Subject Area</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subject_area.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label class="bmd-label-floating">Session ID</label>
                                        <input type="text" class="form-control" name="session_id"
                                            class="form-control @error('session_id') is-invalid @enderror">
                                        @error('session_id')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Subject Area Abbreviation</label>
                                        <input type="text" class="form-control" name="subject_area_abbreviation"
                                            class="form-control @error('subject_area_abbreviation') is-invalid @enderror">
                                        @error('subject_area_abbreviation')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Long Title</label>
                                        <input type="text" class="form-control" name="long_title"
                                            class="form-control @error('long_title') is-invalid @enderror">
                                        @error('long_title')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Department Unique ID</label>
                                        <input type="text" class="form-control" name="department_uniqueid"
                                            class="form-control @error('department_uniqueid') is-invalid @enderror">
                                        @error('department_uniqueid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Add other form fields for the subject_area table here -->
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Add Subject Area</button>
                            <div class="clearfix"></div>
                        </form>
                        <!-- ... your table code ... -->

<!-- <div class="pagination">
    {{ $courses->links() }}
</div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
