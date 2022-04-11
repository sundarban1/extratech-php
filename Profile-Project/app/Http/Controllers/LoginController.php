<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login');
    }
    public function login(Request $request)
    {
        $validation = $request->validate(
            [

                'email' => 'required',
                'password' => 'required',


            ]
        );
        $email = $request->input('email');
        $password = $request->input('password');

        $User = User::where('email', $email)
            ->first();


        if (!empty($User)) {

            $db_Password = $User->password;

            if (Hash::check($password, $db_Password)) {
                return view('users.myProfile', ['user' => $User]);
            } else {

                return redirect()->to('/login')->with('error', 'Invalid username and password.');
            }
        } else {
            return redirect()->to('/login')->with('error', 'The email user doesnot exist');;
        }
    }
}
