<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function login(){
        return view('login');
    }
    public function create(){
        return view('signup');
    }
   
}
