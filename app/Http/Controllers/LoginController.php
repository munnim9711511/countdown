<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function login(Request $request){


        if (Auth::attempt(['name'=>$request->UserName,'password'=>$request->Password])) {

            $request->session()->regenerate();

            return redirect()->intended('/notice');
        }
        else{

            return redirect()->intended('login');
        }
    }
}
