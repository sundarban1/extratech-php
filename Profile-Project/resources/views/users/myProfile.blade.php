@extends('layouts.app')

@section('title', 'myProfile')
@section('content')
    @push('style')
        <style>
            .card-img-top {
                width: 50%;
                margin: auto;
            }

        </style>
    @endpush


    {{-- <div class="row justify-content-center align-items-center">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </a>
                        <h1>{{ $user->firstName }}{{ $user->lastName }}</h1>
                        <p>{{ $user->email }}</p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span
                                    class="label label-warning pull-right r-activity">9</span></a></li>
                        <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
                    </ul>
                </div>
            </div> --}}
    <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="background-color: rgb(0, 255, 170);">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="card-img-top rounded-circle">
            <div class="card-body" style="background-color: aquamarine;">
                <h2 class="card-title">{{ $user->firstName }} {{ $user->lastName }}</h2>
                <p class="card-text">Hi, I am {{ $user->firstName }}{{ $user->lastName }}. I am interested in
                    Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class=" list-group-item" style="background-color: rgb(18, 181, 99);">Email: {{ $user->email }}</li>
                <li class=" list-group-item" style="background-color: rgb(24, 140, 144);">Phone No: {{ $user->mobile }}
                </li>
                <li class="list-group-item" style="background-color: rgb(20, 179, 176);">Date Of birth:
                    {{ $user->dateofbirth }}</li>
                <li class="list-group-item" style="background-color: rgb(27, 163, 159);">Gender: {{ $user->gender }}
                </li>
            </ul>
            <div class="card-body">



                <button class="btn btn-success"><a href="{{ url('/login') }}" class="card-link"
                        style="text-decoration: none; color:white;">Home</a></button>
                <button class="btn btn-success"><a href="{{ route('edit', ['id' => $user->id]) }}" class="card-link"
                        style="text-decoration: none; color:white;">Edit
                        Profile</a></button>
            </div>
        </div>
    </div>

@endsection
