@extends('layouts.master')
@section('content')
<div class="container border p-5 my-3 text-darkgray">
    <h2 class="text-center">Sign In</h2>

    <form action="/action_page.php" method="POST">
        <div class="form-group mt-4">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-group form-check mt-4">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
    </form>
    <p class="pt-4">New user? <a href="{{ route('user_register') }}">Create account</a></p>
</div>
@endsection


