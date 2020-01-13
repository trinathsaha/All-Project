<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['news_name','news_description','publication_status',];

    public static function saveNewsInfo($request)
    {
        $News = new News();
        $News->news_name =      $request->news_name;
        $News->news_description = $request->news_description;
        $News->publication_status = $request->publication_status;
        $News->save();
    }

    public static function updateNewsInfo($request){
        $news = News::find($request->id);
        $news->news_name         = $request->news_name;
        $news->news_description  = $request->news_description;
        $news->publication_status = $request->publication_status;
        $news->save();
    }

    }

