<?php

namespace App\Http\Controllers;

use App\addhotel;
use Illuminate\Http\Request;

class addhotelcontroller extends Controller
{
    public function addhotel(){
        return view('admin.addhotel.addhotel');
    }

    public function newAddHotel(Request $request)
    {
        AddHotel::saveAddHotelInfo($request);

        return redirect('/addhotel')->with('message', 'Hotel Add Successfully');
    }

    public function viewHotel()
    {
        return view('front.hotel.hotel', [
            'hotels' => AddHotel::all()
        ]);
    }
}
