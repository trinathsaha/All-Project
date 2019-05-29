<?php

namespace App\Http\Controllers;

use App\AddPackage;
use Illuminate\Http\Request;

class AddPackageController extends Controller
{
    public function addPackage(){
        return view('admin.addpackage.addpackage');
    }

    public function newAddPackage(Request $request){
        $add_package = new AddPackage();
        $image = $request->file('package_image');
        $imageName = $image->getClientOriginalName();
        $directory = 'package-images/';
        $image->move($directory, $imageName);

        $add_package->package_name          = $request->package_name;
        $add_package->package_description   = $request->package_description;
        $add_package->package_price         = $request->package_price;
        $add_package->package_image         = $directory.$imageName;
        $add_package->save();

        return redirect('/add-package')->with('message', 'Package Add Successfully');
    }

    public function viewPackage(){
        return view('admin.addpackage.view-package',[
            'packages' => AddPackage::all()
        ]);
    }

    public function bookNow(){
        return view('front.package.book-package');
    }


}
