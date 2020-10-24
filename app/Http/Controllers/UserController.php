<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Login
    public function getLogin(){
        return view('Auth.login');
    }
    // SignUp
    public function getSignUp(){
        return view('Auth.regis');
    }
    // Home
    public function getHome(){
        return view('Home.Landing');
    }
    // About
    public function getAbout(){
        return view('Home.About');
    }
    //input_nilai
    public function getInput(){
        return view('Form.input_nilai_user');
    }
    // metode\
    public function getMetode(){
        return view('Home.Metode');
    }
}
