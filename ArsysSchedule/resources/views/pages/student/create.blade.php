@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('student.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card student">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Add Student</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NIM</label>
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
                                        <label class="bmd-label-floating">First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                            class="form-control @error('first_name') is-invalid @enderror">
                                        @error('first_name')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name"
                                            class="form-control @error('middle_name') is-invalid @enderror">
                                        @error('middle_name')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                            class="form-control @error('last_name') is-invalid @enderror">
                                        @error('last_name')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <!-- </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dept</label>
                                        <input type="text" class="form-control" name="dept"
                                            class="form-control @error('dept') is-invalid @enderror">
                                        @error('dept')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> -->
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Add</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
