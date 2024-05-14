<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\User;


class OragnizationController extends Controller
{
   public function show(Organization $organization){
    return view('organizations.orgpage',[
        'organization' => $organization,
        'user'=>User::find($organization->user_id)
    ]);    
   }
   public function showsingup(){
      return view('organizations.singupasorg');
   }
   public function Createorg(){
      
    $attributes = request()->validate([
        'name'=>'required|max:255|min:3',
     'email'=>'required|email|max:255|unique:users,email',
     'password'=>'required|min:7|max:255',
        'birthday'=>'',
        'number'=>'required|max:255|min:10',
     ]);
     $attributes += ['isowner'=>'1'];
    // dd('we did it :)');
  
     $orgattributes = request()->validate([
        'org_name'=>'required|max:255|min:3',
     'location'=>'required|max:255',
     'descrption'=>'required|min:7',
      
     ]);
     $new = User::create($attributes);
     $orgattributes +=['owner_id' => $new->id];
     Organization::create($orgattributes);
     auth()->attempt($attributes);
     return redirect('/Main-page'); 
}
}
