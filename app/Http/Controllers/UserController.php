<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register/create form

    public function create()
    {
        return view('signup');
    }

    //Show the dashboard 
    public function dash()
    {
        return view('dashboard');
    }

    //show the profile
    public function profile()
    {
        return view('profile');
    }

    //Create new user

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::Create($formFields);

        //login
        auth()->login($user);


        return redirect('/dashboard')->with('message','Login Successful!');
    }

    public function edit(User $user)
    {

        return view('editProfile', ['user' => $user]);
    }

    //update user details
    public function update(Request $request, User $user)
    {

        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'fullName' => ['required'],
            'description' => ['required'],
            'phone' => 'required|numeric',
            'location' => ['required'],
        ]);

        if($request->hasFile('avatar')){
            $formFields['avatar'] = $request->file('avatar')->store('logos','public');
        }

        $user->update($formFields);

        return redirect('profile')->with('message','Information updated successfully!');
    }
    ///logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    //Show login form
    public function login()
    {
        return view('signin');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([

             
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return  redirect('/dashboard')->with('message','Login Successful!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput("email");
    }
}
