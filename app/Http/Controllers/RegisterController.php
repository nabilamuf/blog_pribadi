<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>"Register",
            'active'=>'register'
        ]);
    }

    public function store(Request $request){
        

        $request->validate([
            'name'=>'required|max:255',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        dd('REGISTER BERHASIL');
    }
}
