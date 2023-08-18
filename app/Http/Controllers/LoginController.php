<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    function index(){

        return view('login');
    }

    function login(Request $req){

        $valid = $req->validate([

            'email'=>'required|email',
            'password'=>'required',
            
        ]);

        if (Auth::attempt($valid)) {
            $req->session()->regenerate();
 
            return redirect()->intended('studentdashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        
    }
}
