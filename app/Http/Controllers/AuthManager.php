<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error","login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'username'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'agree' => 'accepted'
        ]);

        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if(!$user){
            return redirect(route('register'))->with("error","registration faild, try again.");
        }
        return redirect(route('login'))->with("success","Registration success, Login to access the app.");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('welcome'));
    }
}
