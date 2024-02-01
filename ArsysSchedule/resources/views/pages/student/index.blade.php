@extends('layouts.layout')

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-4">
                <a type="submit" href="{{ route('student.create') }}" class="btn btn-primary pull-right">Tambah</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Student</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>NIM</th>
                                 
                                    <th> Name</th>
                                
                                    <th>Email</th>
                                    <!-- Tambahkan field lain sesuai kebutuhan -->
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->uniqueid }}</td>
                                            <td>{{ $item->first_name }} {{ $item->middle_name }}{{ $item->last_name }}</td>
                                    
                                            <td>{{ $item->email }}</td>
                                            <!-- Tambahkan field lain sesuai kebutuhan -->
                                            <td>
                                                <a href="#mymodal"
                                                    data-remote="{{ route('student.show', $item->uniqueid) }}"
                                                    data-toggle="modal"
                                                    data-target="#mymodal"
                                                    data-title=""
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('student.edit', $item->uniqueid) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('student.destroy', $item->uniqueid) }}" 
                                                    method="post" 
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">Data tidak tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
