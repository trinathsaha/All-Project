<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.home');
    }
    public function Manageuser()
    {
        return view('admin.manage-user.manage-user');
    }

    public function Addreporter()
    {
        return view('admin.manage-user.add-reporter');
    }

    private function Imageupload($blogImage){
        $imageName = $blogImage->getClientOriginalName();
        $directory = 'blog images/';
        $blogImage->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function newUser(Request $request)
    {
        $user = new User();
        $user->name                = $request->name;
        $user->user_type           = $request->user_type;
        $user->email               = $request->email;
        $user->password            = bcrypt($request-> password);
        $user->image               = $this->Imageupload($request->file('image'));
        $user->save();

        return redirect('/add-reporter')->with('message','User info Added successfully');

    }
}
