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
                <a type="submit" href="{{ route('building.create') }}" class="btn btn-primary pull-right">Add</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Building Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Building Name
                                    </th>
                                    <th>
                                        Abbreviation
                                    </th>
                                    <th>
                                        Coordinate
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
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->abbreviation }}
                                            </td>
                                            <td>
                                                {{ $item->coordinate_x }}, {{ $item->coordinate_y}}
                                            </td>
                                            <td>
                                                <a href="#mymodal" data-remote="{{ route('building.show', $item->uniqueid) }}"
                                                    data-toggle="modal" data-target="#mymodal" data-title=""
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('building.edit', $item->uniqueid) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('building.destroy', $item->uniqueid) }}" method="post"
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
                                                data tidak tersedia
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
