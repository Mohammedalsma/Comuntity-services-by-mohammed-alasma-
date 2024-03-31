<?php

use App\Http\Controllers\ActivateController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Activates;


Route::get('/', [ActivateController::class,'index']);

Route::get('activate/{activate}', [ActivateController::class,'showActivate']);

Route::get('createact', [ActivateController::class,'showCreateActivate']);

Route::get('deleteact/{activate}', [ActivateController::class,'showdelete']);

Route::post('deleteact/{activate}', [ActivateController::class,'DeleteAct']);

Route::post('createact', [ActivateController::class,'CreateActivate']);

Route::get('login', [SignupController::class,'login']);

Route::get('signup', [SignupController::class,'create']);


