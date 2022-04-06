@extends('layouts.app')
@section('title', 'login Page')
@section('content')

    <div class="row h-99 justify-content-center align-items-center">
        <div class=" col-10 col-md-8 col-lg-6">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px; margin-top:2%">
                <div class="card-body p-4 p-md-5">
                    {{-- login form --}}
                    <form class="form-signin" action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h1 class="h3 mb-3" style="font-weight:bold;">Please sign in</h1>
                        {{-- input email --}}
                        <label for="inputEmail" class="h5 mb-3" style="font-weight:bold;">Email address*</label>
                        <input type="email" id="inputEmail" name="email" class="form-control mb-3"
                            placeholder="Email address">
                        {{-- input pass --}}
                        <label for="inputPassword" class="h5 mb-3 " style="font-weight:bold;">Password*</label>
                        <input type="password" id="inputPassword" name="password" class="form-control mb-3"
                            placeholder="Password">

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        {{-- submit --}}
                        <button class="btn btn-lg btn-primary btn-block" name="submit_login" type="submit">Sign in</button>

                    </form>
                    <div class="text-center">
                        <p>Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
