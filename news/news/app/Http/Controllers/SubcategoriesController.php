<?php

namespace App\Http\Controllers;
use App\News;
use App\Subcategories;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function addSubcategories()
    {
        return view('admin.news.add-subcategories',[
            'news' => News::where('publication_status',1)->get()
        ]);
    }

    public function checksubcategoryData($request){
        $this->validate($request,[
            'subcategories_name' => 'required|max:15|min:3',

            'subcategories_description' => 'required|max:100'
        ]);
    }

    public function newSubcategories(Request $request)
    {
        $this->checksubcategoryData($request);
        Subcategories::saveSubcategoriesInfo($request);
        return redirect('/news/add-subcategories')->with('message','subcategories info save successfully');
    }
//
    public function manageSubcategories()
    {

        return view('admin.news.manage-Subcategories',[
            'Subcategories' => Subcategories::all()
        ]);
    }
//
    public function editSubcategories($id)
    {
        return view('admin.news.edit-subcategories',[
            'subcategories' => Subcategories::find($id)
        ]);
    }
//
    public function updateSubcategories(Request $request)
    {
        Subcategories::updateSubcategoriesInfo($request);

        return redirect('/news/manage-subcategories')->with('message','subcategories info updated successfully');
    }
//
    public function deleteSubcategories(Request $request)
    {
        $Subcategories = Subcategories::find($request->id);
        $Subcategories->delete();
        return redirect('/news/manage-subcategories')->with('message','subcategories info deleted successfully');
    }
}
