<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersConnectController extends Controller
{
    public function index() {
        $title = "Sign-in";
        return view('users.index', ['title' => $title]);
    }

    public function register() {
        $title = "Sign-up";
        return view('users.register', ['title' => $title]);
    }
}
