<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(){
        return view('login2');
    }

    public function loginImg(){
        return view('loginImg');
    }
}
