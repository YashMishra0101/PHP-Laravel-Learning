<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

//--Shortcut way to define only used for redirect direct access not possible.
//--Without user controller
Route::view("/home","home")->name('hm');
Route::view("/userName/{name}","userName")->name('un');

//--with userController
Route::get('showHome',[userController::class,'showHome']);

//>With parameter
Route::get('showUserName',[userController::class,'showUserName']);




//>Route Gouping in Prefix
Route::prefix('student')->group(function(){
    Route::get('/List',[userController::class,'studentList']);
    Route::get('/Data',[userController::class,'studentData']);
});