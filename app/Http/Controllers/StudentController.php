<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
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
<<<<<<< HEAD
            'name' => 'nullable|string | required',
            'fname' => 'nullable|string|required',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
            'fee' => 'nullable|string',
            'pmode' => 'nullable|string',
            'dfee' => 'nullable|string',
            'duration' => 'nullable|string',
            'in_hour' => 'nullable|string',

            'outtime' => 'nullable|string',
            'adhaar' => 'nullable|string|required',
            'adharimage' => 'nullable|string',
            'image' => 'nullable|string',
            'address' => 'nullable|string',			 
        ]);
        $tim1 = $request->in_hour;
        $inampm = $request->in_ampm;
        $inhour= $tim1 . ' ' . $inampm;
=======
			'name'=>'String | required | min:3',
            'fname'=>'String | required | min:3',
            'phone'=>'String | required | min:10',
            'email'=>'String | required ',
            'fee'=>'String | required ',
            'pmode'=>'String | required',
            'dfee'=>'String | required',
            'duration'=>'String | required',
            'intime'=>'String | required ',
            'outtime'=>'String | required ',
            'adhaar'=>'String | required | min:3',
            'address'=>'String | required ',			 
		]);
        
>>>>>>> 82b3bc4238989f90b5ea3d72b0d8a65e88d22089
		$student = new Student;
        $student->uid = Auth::id();
		$student->name = $request->name;
        $student->fname = $request->fname;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->fee = $request->fee;
        $student->pmode = $request->pmode;
        $student->dfee = $request->dfee;
        $student->duration = $request->duration;
        $student->intime = $inhour;
        $student->outtime = $request->outtime;
        $student->adhaar = $request->adhaar;
        // $student->adharimage = $request->adharimage;
        // $student->image = $request->image;

        if ($request->file('image')) {
            $file = $request->file('adharimage');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('aadhar'),$filename);
            $student['adharimage'] = $filename;
        }
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('studentpic'),$filename);
            $student['image'] = $filename;
        }

        $student->address = $request->address;
        $student->save();
		return back()->with('sucess', 'your Register successfully');
	}

}
