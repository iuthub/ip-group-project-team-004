<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index(){
    	
    	return view('login');
    }
     public function login(){
    	
    	return view('register');
    }
    public function register(){
    	
    	return view('register');
    }
}
