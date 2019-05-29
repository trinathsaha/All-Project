<?php

namespace App\Http\Controllers;

use App\AddPackage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('front.homecontent.homecontent',[
            'packages' => AddPackage::all()
        ]);
    }

}
