<?php

namespace App\Http\Controllers;

use App\Mail\Mail_to_reset_password;
use App\Models\UsersConnect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UsersForgotPassword extends Controller
{
    public function forgotpassword() {
        
        return view('users.forgotpassword');
    }

    public function resetpassword(Request $request) {

        // let's validate the user's email
        $validation = $request->validate(
            [
                'email' => 'email'
            ]
        );

        $email = $request->input('email');

        $authUser = UsersConnect::where('email', $email)->first();

        if($authUser) {
            // creating a 6 numeric character size of password reseting code
            $digit = 6;
            $newPassword = rand(pow(10, $digit - 1), pow(10, $digit)-1);
            // finding the user with id by "where" method of model class and and again calling "update" method to update
            $updatePassword = UsersConnect::where('id', $authUser->id)->update(['password' => Hash::make($newPassword)]);
            if($updatePassword) {
                $details = [
                    'name' => $authUser->first_name,
                    'password' => $authUser->$newPassword
                ];
                Mail::to($email)->send(new Mail_to_reset_password($details));
            }
        }
        else {
            Session::flash('autherror', 'This email user does not exist.');
            return redirect()->route('user_forgotpassword');
        }
    }
}
