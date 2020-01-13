<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use App\News;
use App\Blog;
use App\Subcategories;
use Session;

class SignUpController extends Controller
{
    public function Signup()
    {
        return view('front.visitor.signup',[
            'categories' => News::where('publication_status', 1)->get(),
        ]);
    }

    public function Login()
    {
        return view('front.visitor.login',[
            'categories' => News::where('publication_status', 1)->get(),
        ]);
    }

    public function NewVisitor(Request $request)
    {
        Visitor::saveVisitorInfo($request);
        return view('front.home.home',[
            'blogs' => Blog::where('category_id',$id)->where('publication_status', 1)->get(),
            'categories' => News::where('publication_status', 1)->get(),
            'subcategory' => Subcategories::where('category_id',$id)->where('publication_status', 1)->get(),
            'categoryname' => News::where('id',$id)->where('publication_status', 1)->get()
        ]);
    }

    public function VisitorSignin(Request $request)
    {
        $visitor = Visitor::where('email',$request->email)->first();

        if ($visitor)
        {
            if(password_verify($request->password,$visitor->password)){
            Session::put('visitorId',$visitor->id);
            Session::put('visitorName',$visitor->first_name .'  ' . $visitor->last_name);
            return redirect('/');
            }
            else{
                return redirect('/visitor-login')->with('message','Invalid Password') ;
            }
        }
        else{
            return redirect('/visitor-login')->with('message','Password and Email Address is Not Valid') ;
        }

    }

    public function VisitorLogout()
    {
        Session::forget('visitorId');
        Session::forget('visitorName');
        return redirect('/');
    }
}
