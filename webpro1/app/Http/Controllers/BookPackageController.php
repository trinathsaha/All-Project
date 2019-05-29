<?php

namespace App\Http\Controllers;

use App\BookPackage;
use Illuminate\Http\Request;

class BookPackageController extends Controller
{
    public function BookPackage(Request $request){
        BookPackage::saveBookPackageInfo($request);
        return redirect('/book-now')->with('message','book package successfully');
    }

    public function PackageConfirmation()
    {
        return view('admin.bookingpackage.booking-list',[
            'bookpackages' => BookPackage::all()
        ]);
    }


}
