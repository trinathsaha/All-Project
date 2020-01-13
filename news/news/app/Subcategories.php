<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $fillable = ['subcategories_name','subcategories_description','subcategories_status',];
    public static function saveSubcategoriesInfo($request)
    {
        $subcategories = new Subcategories();
        $subcategories->category_id                 =      $request->category_id;
        $subcategories->subcategories_name          =      $request->subcategories_name;
        $subcategories->subcategories_description   =      $request->subcategories_description;
        $subcategories->publication_status          =      $request->publication_status;
        $subcategories->save();
    }

    public static function updateSubcategoriesInfo($request)
    {
        $subcategories = Subcategories::find($request->id);
        $subcategories->subcategories_name          =      $request->subcategories_name;
        $subcategories->subcategories_description   =      $request->subcategories_description;
        $subcategories->publication_status          =      $request->publication_status;
        $subcategories->save();
    }
}
