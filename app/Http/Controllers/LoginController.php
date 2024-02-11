<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login',
            'active'=>'login'
        ]);
    }

    public function authenticate(Request $request){
        

     $credentials = $request->validate([
           
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        //jika kita jalankan auth lalu attempt dari credential
        if(Auth::attempt($credentials)){
            //session diperbarui
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginerror','Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/home');

    }
}
