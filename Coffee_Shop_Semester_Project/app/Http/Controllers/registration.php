<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\SignUp;


class registration extends Controller
{
    public function index()
    {
        return view('auth.registration');
    }

    public function Register(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=> 'required|numeric|digits:11',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            
        ]);

        $registers = new SignUp; // Must import the Model file: use App\Student;
       
        
        $registers->name = $request->get('name');
        $registers->email = $request->get('email');
        $registers->phone = $request->get('phone');
        $registers->password = Hash::make($request->get('password')) ;
        $registers->confirm_password = Hash::make($request->get('confirm_password')) ;
        
        $registers->save(); /* Store data inside the table */
        
       

    
        return  redirect('/');
    
        
    }

}
