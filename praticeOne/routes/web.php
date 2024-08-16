<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});

//--By default syntax
// Route::get('/homPage', function () {
//     return view('home');
// });

//-- Shortcut
Route::view('/homePage','home');

Route::get('/about/{name}',function($name){
    // echo $name;
    return view ('about',['name'=>$name]);
});

Route::view('/pageOne','pageOne');

Route::view('/pageTwo','pageTwo');

//--Redirect Code
Route::redirect('/pageOne','/pageTwo');

//--userController code
Route::get('user',[Usercontroller::class,'userName']);

Route::get('about',[Usercontroller::class,'userInfo']);

Route::get('userRole/{name}',[Usercontroller::class,'userRole']);

Route::get('getUserName/{name}',[Usercontroller::class,'getUserName']);

Route::get('mainPageCall',[Usercontroller::class,'mainPageCall']);

Route::get('getName/{name}',[Usercontroller::class,'getName']);

Route::get('loginPage',[Usercontroller::class,'loginPage']);

//--/View

Route::view('/testing','testing');








