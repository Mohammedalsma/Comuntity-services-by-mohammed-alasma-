<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activates;
use App\Models\Volunter;

class VolunterController extends Controller
{
    public function show(Activates $activate){
        return view('voulnter.voulnter',[ 
        'activate' => $activate]);
    }
    public function createvoulnter(Activates $activate){
        Volunter::create([
            'user_id' => auth()->user()->id,
            'activates_id'=>$activate->id
        ]);
       
            return redirect('/');
    }
    public function showdontion()
    {
        return view('voulnter.dontion');
    }
}
