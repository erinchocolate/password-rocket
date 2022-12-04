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
        $formFields = $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required', 'email', Rule::unique('users','email')],
            'password'=>'required|confirmed| min:6'
        ]);

        // Hash Password
        $formFields['password']=bcrypt($formFields['password']);
        // Create user
        $user=User::create($formFields);
        // Login
        auth()->login($user);
        return redirect('/user/dashboard')->with('message','User created and logged in');
    }

    //User Login 
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/user/dashboard')->with('message','You are now logged in!');
        }

        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }

    //User Logout
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out!');
    }
}
