@extends('layouts.master')
@section('title', 'Sign-up')
@section('content')
<div class="container border p-5 my-3 text-darkgray">
    <form action="{{ route('user_store') }}" method="POST">
        {{-- to display the error following "if" condition is applied --}}
        @if (count($errors) > 0) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       {{-- Session class is used to display the message on the top of the input field of form --}}
        @if (Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        {{-- csrf token should be used correctly to avoid 419 page expire error before submitting any post request --}}
        @csrf
        <h3 class="text-center">SIGN UP</h3>
        <div class="form-group mt-4">
            <input type="text" class="form-control" placeholder="First Name" name="first-name" required="required">
        </div>
        <div class="form-group mt-4">
            <input type="text" class="form-control" placeholder="Last Name" name="last-name" required="required">
        </div>
        <div class="form-group mt-4">
            <input type="email" class="form-control" placeholder="Email" name="email" required="required">
          </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required="required">
        </div>
        <div class="form-group mt-4">
            <input type="gender" class="form-control" placeholder="Gender" name="gender" required="required">
        </div>
        <div class="form-group mt-4">
            <input type="text" class="form-control" placeholder="Mobile" name="mobile" required="required">
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-4 btn-block shadow rounded">Register</button>
        </div>
    </form>
    <div class="pt-3">
        <hr>
        <p class="m-2"><small>Already have an account?</small> <a href="{{ route('user_index') }}"><small>Sign in</small></a></p>
    </div>
</div>
@endsection