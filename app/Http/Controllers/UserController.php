<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //Show Register Form
    public function register(){
        return view('users.register');
    }

    //Show Login Form
    public function login(){
        return view('users.login');
    }

    //Create New User
    public function create(Request $request){
        // Validate user input
        $formFields = $request->validate([
            // The name can't be empty and needs at least 3 letters
            'name'=>['required','min:3'],
            // The email needs to be unique, each account needs to have an unique email to login
            'email'=>['required', 'email', Rule::unique('users','email')],
            // The password needs to be over 6 letters
            // The confirmed password needs to be the same as the first typed password
            'password'=>'required|confirmed| min:6'
        ]);

        // Hash Password
        $formFields['password']=bcrypt($formFields['password']);
        // Create user
        $user=User::create($formFields);
        // Login
        auth()->login($user);
        return redirect('/dashboard');
    }

    //User Login 
    public function authenticate(Request $request){
        // Validate user email and password with database
        $formFields = $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        // Login successfully
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        // Error message if user inputs wrong email or password
        // It won't tell user whether the email he/she uses already exsits or not
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }

    //User Logout
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
