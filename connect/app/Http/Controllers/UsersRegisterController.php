<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersRegisterController extends Controller
{
    // Creating a register page function
    public function register(Request $request) {
        $title = "Sign-up";
        return view('users.register', ['title' => $title]);
    }

    // Creating a store function
    public function store(Request $request) {
        // todo:
        // Validate the user input form
       

        // Insert into the database table
    }
}
