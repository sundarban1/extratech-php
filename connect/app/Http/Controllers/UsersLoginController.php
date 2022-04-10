<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersLoginController extends Controller
{
    public function index() {
        $title = "Sign-in";
        return view('users.index', ['title' => $title]);
    }
    
}
