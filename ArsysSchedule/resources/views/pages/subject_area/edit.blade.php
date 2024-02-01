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
                        <h4 class="card-title">Edit Subject Area</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subject_area.update', $item->uniqueid) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Unique ID</label>
                                        <input type="text" class="form-control" name="uniqueid"
                                            value="{{ old('uniqueid') ? old('uniqueid') : $item->uniqueid }}"
                                            class="form-control @error('uniqueid') is-invalid @enderror" readonly>
                                        @error('uniqueid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Add other form fields for the subject_area table here -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Session ID</label>
                                        <input type="text" class="form-control" name="session_id"
                                            value="{{ old('session_id') ? old('session_id') : $item->session_id }}"
                                            class="form-control @error('session_id') is-invalid @enderror">
                                        @error('session_id')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Add other form fields based on the subject_area table columns -->
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" class="form-control" name="long_title"
                                            value="{{ old('long_title') ? old('long_title') : $item->long_title }}"
                                            class="form-control @error('long_title') is-invalid @enderror">
                                        @error('long_title')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Edit Subject Area</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
