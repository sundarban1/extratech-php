@extends('layouts.master')
@section('content')
<div class="container border p-5 my-3 text-darkgray">
    <h2 class="text-center">Sign Up</h2>
    <form action="/action_page.php" method="POST">
        <div class="form-group mt-4">
            <input type="text" class="form-control" id="first-name" placeholder="First Name" name="first-name">
        </div>
        <div class="form-group mt-4">
            <input type="text" class="form-control" id="last-name" placeholder="Last Name" name="last-name">
        </div>
        <div class="form-group mt-4">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="confirmation_password">
        </div>
        <div class="form-group mt-4">
            <input type="gender" class="form-control" id="gender" placeholder="Gender" name="gender">
        </div>
        <div class="form-group mt-4">
            <input type="mobile" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
        </div>
        <button type="submit" class="btn btn-primary mt-4" name="register">Register</button>
    </form>
    <p class="pt-4">Already have an account? <a href="{{ route('user_index') }}">Sign in</a></p>
  </div>
</div>
@endsection