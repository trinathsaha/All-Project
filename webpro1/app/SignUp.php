<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Mail;
use Session;

class SignUp extends Model
{
    protected $fillable = ['firstname', 'lastname', 'username', 'contact_num', 'email', 'gender', 'password', 'confirm_password', 'nid', 'passport_no'];


    public static function savevisitorinfo(Request $request)
    {
        $visitor = new SignUp();
        $visitor->first_name = $request->first_name;
        $visitor->last_name = $request->last_name;
        $visitor->username = $request->username;
        $visitor->contact_num = $request->contact_num;
        $visitor->email = $request->email;
        $visitor->gender = $request->gender;
        $visitor->password = bcrypt($request->password);
        $visitor->confirm_password = $request->confirm_password;
        $visitor->nid = $request->nid;
        $visitor->passport_no = $request->passport_no;
        $visitor->save();

        Session::put('visitorId', $visitor->id);
        Session::put('visitorName', $visitor->first_name.''. $visitor->last_name);

        $data = $visitor->toArray();
        Mail::send('front.mail.congratulation', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('congratulation');
        });
    }

}
