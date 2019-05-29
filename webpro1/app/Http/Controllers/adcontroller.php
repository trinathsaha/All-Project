<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adcontroller extends Controller
{
    public function admin(){
        return view('admin.homecontent.homecontent');
    }
}
