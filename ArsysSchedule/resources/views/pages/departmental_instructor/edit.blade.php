@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('departmental_instructor.index') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card staff">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Departmental Instructor</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('departmental_instructor.update', $item->uniqueid) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">UID</label>
                                        <input type="text" class="form-control" name="external_uid"
                                            value="{{ old('external_uid') ? old('external_uid') : $item->external_uid }}"
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
                                        <label class="bmd-label-floating">Front Name</label>
                                        <input type="text" class="form-control" name="fname"
                                            value="{{ old('fname') ? old('fname') : $item->fname }}"
                                            class="form-control @error('fname') is-invalid @enderror">
                                        @error('fname')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Middle Name</label>
                                        <input type="text" class="form-control" name="mname"
                                            value="{{ old('mname') ? old('mname') : $item->mname }}"
                                            class="form-control @error('mname') is-invalid @enderror">
                                        @error('mname')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Last Name</label>
                                        <input type="text" class="form-control" name="lname"
                                            value="{{ old('lname') ? old('lname') : $item->lname }}"
                                            class="form-control @error('lname') is-invalid @enderror">
                                        @error('lname')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Pos Code</label>
                                        <input type="text" class="form-control" name="pos_code"
                                            value="{{ old('pos_code') ? old('pos_code') : $item->pos_code }}"
                                            class="form-control @error('pos_code') is-invalid @enderror">
                                        @error('pos_code')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dept</label>
                                        <input type="text" class="form-control" name="dept"
                                            value="{{ old('dept') ? old('dept') : $item->dept }}"
                                            class="form-control @error('dept') is-invalid @enderror">
                                        @error('dept')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Edit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
