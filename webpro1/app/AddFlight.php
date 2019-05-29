<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddFlight extends Model
{
    public static function saveAddFlightInfo($request)
    {
        $add_flight = new AddFlight();


        $add_flight->from = $request->from;
        $add_flight->destination = $request->destination;
        $add_flight->check_in = $request->check_in;
        $add_flight->check_out = $request->check_out;


        $add_flight->save();
    }
}
