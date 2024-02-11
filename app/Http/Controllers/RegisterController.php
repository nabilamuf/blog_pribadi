<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>"Register",
            'active'=>'register'
        ]);
    }

    public function store(Request $request){
        

        $validateData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        // $validatedata['password']=bcrypt($validatedata['password']);

        //membuat bcrypt password dengan hasing 
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success', 'please login!');

        return redirect('/login')->with('success', 'Registrasi berhasi, Please login!');

        
    }
}
