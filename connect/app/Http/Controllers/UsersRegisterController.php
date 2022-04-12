<?php

namespace App\Http\Controllers;

use App\Models\UsersConnect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\support\Facades\Hash;

class UsersRegisterController extends Controller
{
    // Creating a register page function
    public function register() {
        return view('users.register');
    }

    // Creating a store function
    public function store(Request $request) {

        // Validate the user input form using "validate" method of Request class that takes array as parameter
        $validation = $request->validate(
            [
                'first-name' => 'required|max:100',
                'last-name' => 'required|max:100',
                'email' => 'required|unique:connect_users,email',
                'password' => 'required|min:6|confirmed',        // confirmed is used because of password_confirmation
                'gender' => 'required|in:Male,Female,Other,M,F',
                'mobile' => 'required|digits_between:10,10|unique:connect_users,mobile'
            ]
            );
            
        // Create an instance of UsersConnect model in order to access or map our model class with the db table
        $user = new UsersConnect();
        // Insert into the database table by using "input" method of Request class and store it to db table field
        $user->first_name = $request->input('first-name');
        $user->last_name = $request->input('last-name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->gender = $request->input('gender');
        $user->mobile = $request->input('mobile');
        
        // save() method of model class is necessary to save the input field data to database table column(field)
        if($user->save()) {
            // flash method is called from Session class that takes key and value as parameters
            Session::flash('message', 'You have successfully registered.');     
            return redirect()->route('user_register');
        }
    }

}
