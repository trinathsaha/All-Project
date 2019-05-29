<?php

namespace App\Http\Controllers;

use App\AddFlight;
use Illuminate\Http\Request;

class AddFlightController extends Controller
{
    public function AddFlight()
    {
        return view('admin.addflight.addflight');
    }

    public function viewFlight()
    {
        return view('front.flight.flight', [
            'flights' => AddFlight::all()
        ]);
    }

    public function newAddFlight(Request $request)
    {
        AddFlight::saveAddFlightInfo($request);

        return redirect('/add-flight')->with('message', 'flight Add Successfully');
    }
}
