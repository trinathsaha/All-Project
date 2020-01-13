<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews()
    {
        return view('admin.news.add-news');
    }


    public function checkcategoryData($request){
        $this->validate($request,[
            'news_name' => 'required|regex:/(^([a-zA-Z _]+)(\d+)?$)/u|max:15|min:3',

            'news_description' => 'required|max:100'
        ]);
    }

    public function newNews(Request $request)
    {
        $this->checkcategoryData($request);
        News::saveNewsInfo($request);
        return redirect('/news/add-news')->with('message','news info save successfully');
    }

    public function manageNews()
    {

        return view('admin.news.manage-news',[
            'News' => News::all()
        ]);
    }

    public function editNews($id)
    {
        return view('admin.news.edit-news',[
            'news' => News::find($id)
    ]);
    }

    public function updateNews(Request $request)
    {
            News::updateNewsInfo($request);

            return redirect('/news/manage-news')->with('message','news info updated successfully');
    }

    public function deleteNews(Request $request)
    {
        $news = News::find($request->id);
        $news->delete();
        return redirect('/news/manage-news')->with('message','news info deleted successfully');
    }



}
