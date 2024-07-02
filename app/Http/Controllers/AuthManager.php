<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route(home));
        }
        return redirect(route('login'))->with("error","login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route(home));
        }
        return redirect(route('login'))->with("error","login details are not valid");
    }
}
