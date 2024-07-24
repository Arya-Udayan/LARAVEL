<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function homepage(){
        return view ('homepage');
    }
    function login(){
        return view ('login');
    }
}
