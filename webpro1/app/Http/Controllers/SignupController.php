<?php

namespace App\Http\Controllers;

use App\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class SignupController extends Controller
{
    public function SignUp()
    {
        return view('front.signup.signup');
    }

    public function userSignUp(Request $request)
    {
        SignUp::savevisitorinfo($request);


        return redirect('/')->with('message', 'Congratulations');
    }

    public function congratulation()
    {
        return view('front.mail.congratulation');
    }

    public function userlogout(Request $request)
    {
        Session::forget('visitorId');
        Session::forget('visitorName');
        return redirect('/');
    }

    public function emailcheck($email)
    {

        $visitor = SignUp::where('email', $email)->first();

        if ($visitor) {
            echo("email address exist");
        } else {
            echo("email address is available");
        }
    }

    public function viewUser()
    {
        return view('admin.homecontent.registraruser', [
            'visitors' => SignUp::all()
        ]);

    }
}






