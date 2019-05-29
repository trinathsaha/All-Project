<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationController extends Controller
{
    public function vacation(){
        return view('front.vacation.vacation');
    }
}
