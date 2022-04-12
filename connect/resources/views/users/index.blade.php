@extends('layouts.master')
@section('title', 'Sign-in')
@section('content')
<div class="container border p-5 my-3 text-darkgray">
    <form action="{{ route('user_auth') }}" method="POST">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('autherror'))
            <p class="alert alert-info">{{ Session::get('autherror') }}</p>
        @endif

        @csrf
        <h3 class="text-center">SIGN IN</h3>
        <div class="form-group mt-4">
            <input type="email" class="form-control" placeholder="Enter email" name="email" required="required">
        </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" placeholder="Enter password" name="password" required="required">
        </div>
        <div class="form-group form-check mt-4">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary mt-3 btn-block shadow rounded">Login</button>
        <a href="{{ route('user_forgotpassword') }}" class="float-right"><small>Forgot your password?</small></a>
    </form>
    <div class="pt-4">
        <hr>
        <p class="m-2 text-center"><small>Need an account?</small> <a class="text-center" href="{{ route('user_register') }}"><small>Create account</small></a></p>
    </div>
</div>
@endsection


