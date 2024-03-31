<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activates;
use App\Models\Organization;

class ActivateController extends Controller
{
    public function index(){
        return view('Main-page',[
            'activates' => Activates::all()
        ]);
    }
    public function showActivate(Activates $activate){
        return view('activate_page',[
            'activate' => $activate,
            'org'=>Organization::find($activate->org_id)
        ]);    
    }
    public function showCreateActivate(){
        return view('createact');
    }
    public function CreateActivate(){
        $org = Organization::factory()->create();
      
        $attributes = request()->validate([
            'name'=>'required|max:255',
            'location'=>['required','max:255'],
            'type_of_work'=>'required|max:255',
            'category'=>'required|max:255',
            'descrption'=>'required|min:7|max:255'
            
            
         ]);
         $attributes += [
            
            'org_id'=>$org->id,
         ];
         Activates::create($attributes);
         return redirect('/'); 
    }
    public function showdelete(Activates $activate){
        return view('deleteact',[
            'activate' => $activate,
            ]
        );
    }
    public function DeleteAct(Activates $activate){
        $activate->delete();
        return redirect('/');   
    }
    
}
