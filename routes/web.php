<?php

use App\Http\Controllers\ActivateController;
use App\Http\Controllers\OragnizationController;
use App\Http\Controllers\SeesionsController;
use App\Http\Controllers\VolunterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ActivateController::class,'index']);
Route::get('/Main-page', [ActivateController::class,'allactivates']);

Route::get('activate/{activate:name}', [ActivateController::class,'showActivate']);
Route::get('createact', [ActivateController::class,'showCreateActivate'])->middleware('admin');
Route::post('createact', [ActivateController::class,'CreateActivate'])->middleware('admin');;

Route::get('deleteact/{activate:name}', [ActivateController::class,'showdelete'])->middleware('admin');
Route::post('deleteact/{activate:name}', [ActivateController::class,'DeleteAct'])->middleware('admin');

Route::get('edit/{activate:name}', [ActivateController::class,'edit'])->middleware('admin');
Route::post('update/{activate:name}', [ActivateController::class,'update'])->middleware('admin');

Route::get('login', [SeesionsController::class,'login'])->middleware('guest');
Route::post('login', [SeesionsController::class,'check'])->middleware('guest');
Route::get('logout', [SeesionsController::class,'areyousurepage'])->middleware('auth');
Route::post('logout', [SeesionsController::class,'exit'])->middleware('auth');


Route::get('signup', [SeesionsController::class,'showsignup'])->middleware('guest');
Route::post('signup', [SeesionsController::class,'Createuser'])->middleware('guest');

Route::get('voulnter/{activate:name}', [VolunterController::class,'show'])->middleware('auth');
Route::post('createvoulnter/{activate:name}', [VolunterController::class,'createvoulnter'])->middleware('auth');
Route::get('dontion',[VolunterController::class,'showdontion']);

Route::get('orgpage/{organization:org_name}',[OragnizationController::class,'show']);
Route::get('singupasorg',[OragnizationController::class,'showsingup']);
Route::post('singupasorg',[OragnizationController::class,'Createorg']);



