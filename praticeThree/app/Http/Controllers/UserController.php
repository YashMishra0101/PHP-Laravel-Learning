<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function users(){
     $users=DB::select('select*from users');
     return view("userData",["usersInfo"=>$users]);
   }
}
