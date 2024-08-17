<?php

use App\Http\Middleware\CountryCheck;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('countryData','countryData')->middleware('check1');
Route::view('ageData','ageData');

Route::get('users',[userController::class,'users']);
