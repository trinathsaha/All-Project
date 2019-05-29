<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandhorbanController extends Controller
{
    public function bandhorban()
    {
        return view('front.bandhorban.bandhorban');
    }
}
