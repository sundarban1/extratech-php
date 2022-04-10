@extends('layouts.master')
@section('content')
<div class="login-form">
    <form action="{{route('user.store')}}" method="post">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        @csrf
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <input name="first_name" type="text" class="form-control" placeholder="First Name" required="required">
        </div>
        <div class="form-group">
            <input name="last_name" type="text" class="form-control" placeholder="Last Name" required="required">
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <input name="gender" type="text" class="form-control" placeholder="Gender" required="required">
        </div>
        <div class="form-group">
            <input name="mobile" type="text" class="form-control" placeholder="Mobile" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <!--   <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>  
-->
    </form>
    <p class="text-center">Already have an account? <a href="{{route('user.login')}}">Login</a></p>
</div>
@stop
