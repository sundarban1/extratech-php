<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {

        return view('users.register');
    }

    public function login(Request $request)
    {

        return view('users.login');
    }

}
