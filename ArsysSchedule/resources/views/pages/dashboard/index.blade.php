@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <p class="card-category">Instructor</p>
                    <h3 class="card-title">
                        {{ $instructor }}
                        <small>Person</small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <!-- You can add specific statistics or information here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">school</i>
                    </div>
                    <p class="card-category">Course</p>
                    <h3 class="card-title">
                        {{ $subjectArea }}
                        <small>Subject</small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <!-- You can add specific statistics or information here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">book_online</i>
                    </div>
                    <p class="card-category">Building</p>
                    <h3 class="card-title">
                        {{ $building }}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <!-- You can add specific statistics or information here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-magenta card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">class</i>
                    </div>
                    <p class="card-category">Room</p>
                    <h3 class="card-title">
                        {{ $room }}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <!-- You can add specific statistics or information here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
