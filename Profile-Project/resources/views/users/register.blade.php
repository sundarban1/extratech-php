@extends('layouts.app')
@section('title', 'Register Page')
@section('content')


    <div class="container py-5 h-99">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-weight: bold">Registration Form</h3>


                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <label class="form-label" for="firstName">First Name</label>

                                        <input type="text" id="firstName" name="firstName"
                                            class="form-control form-control-lg"
                                            class="@error('firstName') is-invalid @enderror">
                                        @error('firstName')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Last Name</label>

                                        <input type="text" id="lastName" name="lastName"
                                            class="form-control form-control-lg"
                                            class="@error('lastName') is-invalid @enderror">
                                        @error('lastName')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div class="form-outline datepicker w-100">
                                        <label for="birthdayDate" class="form-label">Birthday</label>

                                        <input type="date" name="dateofbirth" class="form-control form-control-lg"
                                            id="birthdayDate" class="@error('datofbirth') is-invalid @enderror">
                                        @error('datofbirth')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">


                                    <div class="row">

                                        <div class="col-12">
                                            <h6 class="mb-2 pb-1">Gender: </h6>
                                            <label class="form-label select-label" for="gender">Choose option</label>
                                            <select class="select form-control-lg" style="margin-left:5%;" name="gender"
                                                id="gender">
                                                <option value="1" disabled>Choose option</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="others">Others</option>
                                            </select>


                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Email</label>
                                        <input type="email" id="emailAddress" name="email"
                                            class="form-control form-control-lg"
                                            class="@error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>

                                        <input type="text" id="phoneNumber" name="phoneNumber"
                                            class="form-control form-control-lg"
                                            class="@error('phoneNumber') is-invalid @enderror">
                                        @error('phoneNumber')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg"
                                            class="@error('password') is-invalid @enderror">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="password">Confirm Password</label>
                                        <input type="password" id="confirm_password" class="form-control form-control-lg"
                                            name="password_confirmation">


                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <label for="profile_picture" class="form-label">Upload your picture</label>
                                    <input class="form-control form-control-lg" id="profile_picture" name="profile_picture"
                                        type="file" class="@error('profile_picture') is-invalid @enderror">
                                    @error('profile_picture')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" name="submit_register"
                                    id="submit_register" value="Submit" />
                            </div>

                        </form>
                        <div class="text-center">
                            <p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
