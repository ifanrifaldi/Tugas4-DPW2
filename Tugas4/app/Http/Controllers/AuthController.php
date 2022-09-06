<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    function ShowLogin(){
        return view ('login');
    }
    function processLogin(){
        return view ('');
    }
    function logout(){
        return view ('');
    }
    function registration(){
        return view ('');
    }
    function forgotPassword(){
        return view ('');
    }
}