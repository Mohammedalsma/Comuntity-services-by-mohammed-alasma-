<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class SeesionsController extends Controller
{
    public function showsignup( Request $request){      
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
