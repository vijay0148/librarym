<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function registration()
    {
        return view('sturegistration');

    }
    
    public function studentregister(Request $request){
		$request->validate([
			'name'=>'String | required | min:3',
            // 'fname'=>'String | required | min:3',
            // 'phone'=>'String | required | min:3',
            // 'email'=>'String | required | min:3',
            // 'fee'=>'String | required | min:3',
            // 'pmode'=>'String | required | min:3',
            // 'dfee'=>'String | required | min:3',
            // 'duration'=>'String | required | min:3',
            // 'intime'=>'String | required | min:3',
            // 'outtime'=>'String | required | min:3',
            // 'adhaar'=>'String | required | min:3',
            // 'adharimage'=>'String | required | min:3',
            // 'image'=>'String | required | min:3',
            // 'address'=>'String | required | min:3',			 
		]);
        
		// $student = new students;
		// $student->name = $request->name;
        // $student->fname = $request->fname;
        // $student->phone = $request->phone;
        // $student->email = $request->email;
        // $student->fee = $request->fee;
        // $student->pmode = $request->pmode;
        // $student->dfee = $request->dfee;
        // $student->duration = $request->duration;
        // $student->intime = $request->intime;
        // $student->outtime = $request->outtime;
        // $student->adhaar = $request->adhaar;
        // $student->adharimage = $request->adharimage;
        // $student->image = $request->image;
        // $student->address = $request->address;
        // $student->save();
		return back()->with('sucess', 'your Register successfully');

	}

}
