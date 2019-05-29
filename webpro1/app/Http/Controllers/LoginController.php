<?php

namespace App\Http\Controllers;

use App\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('front.login.login');
    }

    public function userlogin(Request $request){

       $visitor = SignUp::where('username', $request->username)->first();
       if($visitor) {

           if (password_verify($request->password, $visitor->password)) {
               Session::put('visitorId', $visitor->id);
               Session::put('visitorName', $visitor->first_name . '' . $visitor->last_name);
               return redirect('/');
           } else {
               return redirect('/front/login')->with('message','*password not valid');
           }
       }

       else{
           return redirect('/front/login')->with('message','*username not valid');
       }

    }

}
