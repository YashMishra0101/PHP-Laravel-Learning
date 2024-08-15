<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{

    function userName()
    {
        return "Yash Mishra";
    }

    function userInfo()
    {
        return "Yash is a Front End Developer";
    }

    function userRole($name)
    {
        return "Hello My role is {$name}";
    }

    function getuserName($userName)
    {
        return "Hi My name is {$userName}";
    }

    function mainPageCall()
    {
        return  view("welcome");
    }

    function getName($userName)
    {
        return  view("getName", ['userName'=>$userName]);
    }

    function loginPage()
    {
        if (View::exists('login.userLogin')){

            return  view("login.userLogin");
        }else{
            echo "Page Not Found";
        }
    }
}
