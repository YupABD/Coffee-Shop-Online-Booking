<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\SignUp;

class login extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login_user(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
            
            
        ]);

        $signup = SignUp::where('email','=',$request->email)->first(); 
        if ($signup) {
            if (Hash::check($request->password, $signup->password)) {
                                                                   
               return redirect('/main')->with('l-success', 'you are logged in successfully');
            }
              else {
                return back()-> with('l-error', 'Password not matches. ');
            }
           }
          else
            return back() -> with('l-error', 'This email is not registered.');
       
    }
}
