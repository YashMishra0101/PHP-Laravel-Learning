<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{    
    // Redirect with short name
    function showHome(){
        return to_route('hm');
    }

    function showUserName (){
        return to_route('un',["name"=>'yash']);
    }

    function studentList(){
        return view ('studentList');
    }

    function studentData(){
        return view('studentData');
    }
}
