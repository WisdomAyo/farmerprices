<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function getLoginForm(){
        return view('admin.login.login_form');
    }


    public function postSignIn(Request $request){

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        if(auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ])){
            if( Auth::user()){
                return redirect()->route('admin.home');
            }
            return redirect()->route('admin');

        }
        return back()->withErrors(['message' => 'Email or password are wrong.']);
        //}
    }


    public function logout()
    {

//        Auth::guard('users')->logout();
        Auth::logout();
        return redirect()->route('login');
    }
}
