<?php

namespace App;
use Session;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['first_name','last_name','email','number','password'];

    public static function saveVisitorInfo($request)
    {
        $visitor = new Visitor();
        $visitor->first_name = $request->first_name;
        $visitor->last_name = $request->last_name;
        $visitor->email = $request->email;
        $visitor->contact_number = $request->contact_number;
        $visitor->password = bcrypt($request->password);
        $visitor->address = $request->address;
        $visitor->save();

        Session::put('visitorId',$visitor->id);
        Session::put('visitorName',$visitor->first_name .'  ' . $visitor->last_name);

    }
}
