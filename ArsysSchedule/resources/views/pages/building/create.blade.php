@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('building.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card building">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Add Builing</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('building.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Session</label>
                                        <input type="text" class="form-control" name="session_id"
                                            class="form-control @error('session_id') is-invalid @enderror">
                                        @error('session_id')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name Building</label>
                                        <input type="text" class="form-control" name="name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Abbreviation</label>
                                        <input type="text" class="form-control" name="abbreviation"
                                            class="form-control @error('abbreviation') is-invalid @enderror">
                                        @error('abbreviation')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Coordinate X</label>
                                        <input type="text" class="form-control" name="coordinate_x"
                                            class="form-control @error('coordinate_x') is-invalid @enderror">
                                        @error('coordinate_x')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Coordinate Y</label>
                                        <input type="text" class="form-control" name="coordinate_y"
                                            class="form-control @error('coordinate_y') is-invalid @enderror">
                                        @error('coordinate_y')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">External_UID</label>
                                        <input type="text" class="form-control" name="external_uid"
                                            class="form-control @error('external_uid') is-invalid @enderror">
                                        @error('external_uid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div> -->
                              
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">ADD</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
