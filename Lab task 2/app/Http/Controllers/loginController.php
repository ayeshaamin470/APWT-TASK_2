<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    

	public function Create(){
        return view('login');
    }
    public function createSubmit(Request $request){
       // using requests validate method
$validate = $request->validate([
                'id'=>'required|min:5|max:10',
                'pass'=>'required|min:5|max:10'
                
            ],
            [
                'id.required'=>'Please put your id',
                'pass.min'=>'password must be greater than 4 charcters',
            ]
        );
		return "ok";
}
}
