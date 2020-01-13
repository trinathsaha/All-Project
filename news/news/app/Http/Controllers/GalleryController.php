<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function addVideo()
    {
        return view('admin.gallery.add-video',[
            'news' => News::where('publication_status',1)->get()
        ]);
    }

    private function Videoupload($video){
        $VideoName = $video->getClientOriginalName();
        $directory = 'gallery/';
        $video->move($directory, $VideoName);
        return $directory.$VideoName;
    }
    public function newVideo(Request $request)
    {
        $gallery = new Gallery();
        $gallery->category_id              = $request->category_id;
        $gallery->reporter_id              = $request->reporter_id;
        $gallery->video_title               = $request->video_title;
        $gallery->video_short_description   = $request->video_short_description;

//        if($request->hasFile('video')){
//            $video_tmp = Input::file('video');
//            $videoName = $video_tmp->getClientOriginalName();
//            $directory = '/gallery';
//            $video_tmp->move($directory, $videoName);
//            $gallery->video = $request->$videoName;
//        }

        $gallery->video               = $this->Videoupload($request->file('video'));


        $gallery->publication_status       = $request->publication_status;
        $gallery->save();

        return redirect('/gallery/add-video')->with('message','Galleries Video info added successfully');
    }

}
