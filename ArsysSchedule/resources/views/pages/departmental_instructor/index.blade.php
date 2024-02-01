@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                {{-- @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif --}}
            </div>
            <div class="col-4">
                <a type="submit" href="{{ route('departmental_instructor.create') }}" class="btn btn-primary pull-right">Tambah</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Data Departmental Instructors</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Pos Code
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Dept
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>
                                                {{ $item->uniqueid }}
                                            </td>
                                            <td>
                                                {{ $item->pos_code_type }}
                                            </td>
                                            <td>
                                                {{ $item->fname }} {{ $item->mname }} {{ $item->lname }}
                                            </td>
                                            <td>
                                                {{ $item->department['abbreviation'] }}
                                            </td>
                                            <td>
                                                <a href="#mymodal" data-remote="{{ route('departmental_instructor.show', $item->uniqueid) }}"
                                                    data-toggle="modal" data-target="#mymodal" data-title=""
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('departmental_instructor.edit', $item->uniqueid) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('departmental_instructor.destroy', $item->uniqueid) }}" method="post"
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
                                            <td>
                                                Data tidak tersedia
                                            </td>
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
