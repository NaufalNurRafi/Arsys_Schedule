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
                        <h4 class="card-title">Edit Course Offering</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course_offering.update', $item->uniqueid) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Unique ID</label>
                                        <input type="text" class="form-control" name="uniqueid"
                                            value="{{ old('uniqueid') ? old('uniqueid') : $item->uniqueid }}"
                                            class="form-control @error('uniqueid') is-invalid @enderror">
                                        @error('uniqueid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Add other form fields for the course_offering table here -->

                            <button type="submit" class="btn btn-primary pull-right">Edit Course Offering</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
