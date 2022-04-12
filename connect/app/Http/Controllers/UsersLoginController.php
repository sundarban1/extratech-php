<?php

namespace App\Http\Controllers;

use App\Models\UsersConnect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;

class UsersLoginController extends Controller
{
    public function index() {
        return view('users.index');
    }
    
    public function auth(Request $request) {

        //Perform the validation of user input field for email\username and password using validate method
        $validation = $request->validate(
            [
                'email' => 'email',
                'password' => 'required'
            ]
        );
        // storing the input value of user into temporary variable
        // in order to find or compare with the values in database
        $email = $request->input('email');
        $password = $request->input('password');

        // the record of the user is fetched to the authUser variable from database using Model class and first method
        $authUser = UsersConnect::where('email', $email)->first();
        
        if(!empty($authUser)) {
            
            $dbpassword = $authUser->password;
            // checking or comparing the user password with database password using Hash::check()
            if(Hash::check($password, $dbpassword)) {
                $users = UsersConnect::all();
                return view('users.home', ['users' => $users]);
            }
            else {
                Session::flash('autherror', 'Invalid username and password');
                return redirect()->route('user_index');
            }
        }
        else {
            Session::flash('autherror', 'This email user does not exist');
            return redirect()->route('user_index');
        }

    }
}
