
@extends('user.layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-7 text-black text-center">
           <img src="{{ asset('/img/logo upi.pngg') }}" alt="Logo" style="max-width: 100%; height: auto; margin-bottom: 1rem;">
            <link rel="icon" type="image/png" href="../assets/img/logo upi.png">
            <h2 class="mb-4">Arsys Schedule</h2>
            <hr style="border-top: 5px solid #fff; width: 100%; margin-top: 1rem; margin-bottom: 1rem;">
            <h2>University Timetabling</h2>
        </div>
        <div class="col-md-5">
            <div class="login bg-light p-4 rounded">
                <h3 class="text-center">Login</h3>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="user" action="{{ route('login2') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nim/Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <h3 class="text-center"><button type="submit" class="btn btn-primary">Login</button></h3>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
