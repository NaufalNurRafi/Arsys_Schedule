
@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('department.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card staff">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Department</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
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
                                        <label class="bmd-label-floating">Abbreviation</label>
                                        <input type="text" class="form-control" name="abbreviation"
                                            class="form-control @error('abbreviation') is-invalid @enderror">
                                        @error('abbreviation')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- tambahkan input lainnya sesuai dengan struktur tabel department -->
                            <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
