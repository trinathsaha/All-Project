<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPackage extends Model
{
    public static function saveBookPackageInfo($request)
    {
        $book_package = new BookPackage();


        $book_package->first_name = $request->first_name;
        $book_package->last_name = $request->last_name;
        $book_package->contact_num = $request->contact_num;
        $book_package->email = $request->email;
        $book_package->gender = $request->gender;
        $book_package->select_package = $request->select_package;
        $book_package->nid = $request->nid;
        $book_package->passport_no = $request->passport_no;

        $book_package->save();
    }
}
