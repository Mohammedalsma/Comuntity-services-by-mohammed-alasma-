<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activates;
use App\Models\Organization;
use App\Models\User;

class SignupController extends Controller
{
    public function showsignup(){
        return view('seesions.signup');
    }
    public function Createuser(){
      
        $attributes = request()->validate([
            'name'=>'required|max:255|min:3',
         'email'=>'required|email|max:255|unique:users,email',
         'password'=>'required|min:7|max:255',
            'birthday'=>'',
            'number'=>'required|max:255|min:10',
         ]);
         $attributes += ['isowner'=>'0'];
        // dd('we did it :)');
         User::create($attributes);
         auth()->attempt($attributes);
         return redirect('/Main-page'); 
    }
   
}
