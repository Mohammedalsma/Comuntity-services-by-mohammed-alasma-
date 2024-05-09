<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
   public function login(){
    return view('seesions.login');
   }
   public function check(){
    $attributes = request()->validate([
        'email'=>'required|email',
        'password'=>'required'
     ]);
     if(auth()->attempt($attributes)){
        return redirect('/Main-page');
     }
     throw ValidationException::withMessages([
        'email'=>'email or the password is incorrect, please try agian',
        
     ]);
   }
   public function areyousurepage(){
      return view('seesions.logout');
   }
   public function exit(){
    auth()->logout();
    return redirect('/');
   }
}
