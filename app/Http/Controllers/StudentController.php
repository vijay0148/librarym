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
        $student->adharimage = $request->adharimage;
        $student->image = $request->image;
        $student->address = $request->address;
        $student->save();
		return back()->with('sucess', 'your Register successfully');

	}



}
