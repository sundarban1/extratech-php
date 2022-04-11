<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validation = $request->validate(
            [
                'firstName' => 'required|max:255',
                'lastName' => 'required|max:255',
                'email' => 'required|unique:users|email',
                'password' => 'required|confirmed|min:8',
                'confirm_password' => '',
                'phoneNumber' => 'min:10|required',
                'dateofbirth' => 'required',
                'profile_picture' => 'image|nullable|max:1999',



            ]
        );

        //Handle file upload
        if ($request->hasFile('profile_picture')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();
            //Get just filename\
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('profile_picture')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload the picture 
            $path = $request->file('profile_picture')->storeAs('public/profile_pictures', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        $users = new User();
        $users->firstName = $request->firstName;
        $users->lastName = $request->lastName;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->gender = $request->gender;
        $users->mobile = $request->phoneNumber;
        $users->dateofbirth = $request->dateofbirth;
        $users->profile_picture = $fileNameToStore;

        $users->save();
        return redirect()->to('/register')->with('message', 'You have sucessfully registered.');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); // select * from users where id = $id;

        return view('users.myProfileupdate', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('user_id');
        $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'unique:users,email,' . $id,
            'phoneNumber' => 'min:10|required',
            'dateofbirth' => 'required',
        ]);

        $user = User::find($id);
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->mobile = $request->input('phoneNumber');
        $user->dateofbirth = $request->input('dateofbirth');
        $user->save();
        Session::flash('message', 'You have updated Successfully.');
        return view('users.myProfileupdate', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
