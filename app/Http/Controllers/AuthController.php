<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
	public function loadRegister(){
		return view('register');
	}

    public function studentRegister(Request $request){
        
		$request->validate([
			'name'=>'String | required | min:3',
			'email'=>'String | required | email | unique:users',
			'password'=>'String | required | confirmed| min:6',
		]);

		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
        $user->save();

		return back()->with('sucess', 'your Register successfully');

	}


	public function loadlogin(){
      return view('login');
	}

	public function userlogin(Request $request){
     $request->validate([
		'email'=>'String | required | email',
		'password'=>'String | required',
	 ]); 
	 $usercredential = $request->only('email', 'password');
		if(Auth::attempt($usercredential)){
				return redirect('/dashboard');
		}else{
		return back()->with('error', 'user name and password is incorrect')	;
		}
 
	}



	public function librarydashboard()
	{
		return view('/dashboard');
	}
}
