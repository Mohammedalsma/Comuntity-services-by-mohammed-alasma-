<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activates;
use App\Models\Organization;
use App\Models\Volunter;


class ActivateController extends Controller
{
  
     
    
    public function index(){
        return view('index');
    }
    public function allactivates(){
       
        return view('Main-page',[
            'activates' => Activates::all()->sortByDesc('id'),
        ]);
    }
    public function showActivate(Activates $activate){

        return view('activates.activate_page',[
            'activate' => $activate,
            'org'=>Organization::find($activate->org_id),
        ]);    
    }
    public function showCreateActivate(){
        return view('activates.createact');
    }
    public function CreateActivate(Request $request){
        $org =  Organization::where("owner_id", auth()->user()->id)->first(); 
        $attributes = request()->validate([
            'name'=>'required|max:255|unique:activates,name',
            'location'=>['required','max:255'],
            'type_of_work'=>'required|max:255',
            'category'=>'required|max:255',
            'descrption'=>'required|min:7|max:255',
            'activates_start_at'=>''
            
         ]);
         $attributes += [
            
            'org_id'=> $org->id
         ];
       
   $fileName = time().$request->file('photo')->getClientOriginalName();
   $path = $request->file('photo')->storeAs('images',$fileName,'public');
    $attributes += [
    'photo' => '/storage/'.$path];

   Activates::create($attributes);
        return redirect('Main-page');
    }
    public function showdelete(Activates $activate){
        return view('activates.deleteact',[
            'activate' => $activate,
            ]
        );
    }
    public function DeleteAct(Activates $activate){
        
     Volunter::where("activates_id", $activate->id)->delete();
        
        $activate->delete();
        return redirect('/Main-page');   
    }

    public function edit(Activates $activate){
        return view('activates.edit',[
            'activate' => $activate,
            ]
        );
    }
    public function update(Activates $activate, Request $request){
        $attributes = request()->validate([
            'name'=>'required|max:255|unique:activates,name',
            'location'=>['required','max:255'],
            'type_of_work'=>'required|max:255',
            'category'=>'required|max:255',
            'descrption'=>'required|min:7|max:255',
            'activates_start_at'=>''
            
         ]);
         $requestdata = $request->all();
         $fileName = time().$request->file('photo')->getClientOriginalName();
         $path = $request->file('photo')->storeAs('images',$fileName,'public');
          $attributes += [
          'photo' => '/storage/'.$path];
      $activate->update($attributes);
      $activate->save();
      return redirect('/Main-page');
    }
 
}