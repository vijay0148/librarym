<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
	public function loadRegister(){
		return view('register');
	}

	public function loadlogin(){
      return view('login');
	}
}
