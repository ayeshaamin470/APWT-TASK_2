<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
   public function Create(){
        return view('registration');
    }
    public function createSubmit(Request $request){
       // using requests validate method
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
				'uname'=>'required|min:5|max:15',
                'email'=>'required|min:5|max:10',
				'pn'=>'required|max:11',
				'pass'=>'required|min:5|max:10',
				'cpass'=>'required|min:5|max:10',
				'dob'=>'required|max:13',
                
            ],
            [
			    'uname.required'=>'Please put your username',
                'name.required'=>'Please put your name',
                'email.required'=>'required',
				'pn.required'=>'required',
				'dob.required'=>'required',
            ]
        );
		return "ok";  
}
}
