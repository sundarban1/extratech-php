@extends('layouts.master')
@section('content')
<div class="container border p-5 my-3 text-darkgray">
    <form action="{{ route('user_resetpassword') }}" method="POST">
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
            <p class="alert alert-danger">{{ Session::get('autherror') }}</p>
        @endif
        @csrf
        <h3 class="text-center">Reset Password</h3>
        <div class="form-group mt-4">
            <input type="email" class="form-control" placeholder="Enter email" name="email" required="required">
        </div>
        <button type="submit" class="btn btn-primary mt-3 btn-block shadow">Send</button>
    </form>
</div>
    
@endsection