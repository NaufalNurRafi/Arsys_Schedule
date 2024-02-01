
@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('room.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card room">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Room</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">External UID</label>
                                        <input type="text" class="form-control" name="external_uid"
                                            class="form-control @error('external_uid') is-invalid @enderror">
                                        @error('external_uid')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Building ID</label>
                                        <input type="text" class="form-control" name="building_id"
                                            class="form-control @error('building_id') is-invalid @enderror">
                                        @error('building_id')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Room Number</label>
                                        <input type="text" class="form-control" name="room_number"
                                            class="form-control @error('room_number') is-invalid @enderror">
                                        @error('room_number')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Capacity</label>
                                        <input type="text" class="form-control" name="capacity"
                                            class="form-control @error('capacity') is-invalid @enderror">
                                        @error('capacity')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Coordinate X</label>
                                        <input type="text" class="form-control" name="coordinate_x"
                                            class="form-control @error('coordinate_x') is-invalid @enderror">
                                        @error('coordinate_x')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
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
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
