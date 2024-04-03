<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
	public function loadRegister(){
		if(Auth::user()){
			return redirect('/dashboard');
		 }
		return view('register');
	}

    // public function Userregister(Request $request){
        
	// 	$request->validate([
	// 		'name'=>'String | required | min:3',
	// 		'email'=>'String | required | email | unique:users',
	// 		'password'=>'String | required | confirmed| min:6',
	// 	]);

	// 	$user = new User;
	// 	$user->name = $request->name;
	// 	$user->email = $request->email;
	// 	$user->password = Hash::make($request->password);
    //     $user->save();

	// 	return back()->with('sucess', 'your Register successfully');

	// }

	
	public function Userregister(Request $request){
    // Define custom validation rules
    $rules = [
        'name' => 'required|string|min:3',
        'email' => [
            'required',
            'string',
            'email',
            'max:255',
            'unique:users,email',
            function ($attribute, $value, $fail) {
                if (!preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $value)) {
                    return $fail('The '.$attribute.' must be a valid Gmail address.');
                }
            },
        ],
        'password' => 'required|string|min:6|confirmed',
    ];

    // Custom error messages
    $messages = [
        'email.unique' => 'The email has already been taken.',
        // You can specify other custom messages here
    ];

    // Validate the request
    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    // Proceed with user registration
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    return back()->with('sucess', 'your Register successfully');
	}


	public function loadlogin(){
		if(Auth::user()){
			return redirect('/dashboard');
		 }
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
		 $userId = Auth::id();
		 $stquantity = Student::where('uid', $userId)->count();
		 $stdetail = Student::where('uid', $userId)->get();
		return view('dashboard', compact('stquantity', 'stdetail'));
		
	}
}
