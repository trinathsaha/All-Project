<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\News;
use App\Subcategories;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Projectcontroller extends Controller
{
    public function index()
    {

        return view('front.home.home',[
            'blogs' => Blog::where('publication_status', 1)->orderBy('id','desc')->take(4)->get(),
            'packages' => Blog::where('publication_status', 1)->orderBy('created_at')->skip(1)->take(1)->get(),
            'categories' => News::where('publication_status', 1)->get(),
            'sports' => Blog::where('publication_status',1)->where('category_id',17)->get(),
            'orthoniti' => Blog::where('publication_status',1)->where('category_id',16)->get(),
            'international' => Blog::where('publication_status',1)->where('category_id',15)->get(),
            'binodon' => Blog::where('publication_status',1)->where('category_id',18)->get(),
            'entertain' => Blog::where('publication_status',1)->where('category_id',18)->take(1)->get()
        ]);
    }

    public function categoryBlog($id,$name)
    {

        return view('front.category.blog',
            [
                'blogs' => Blog::where('category_id',$id)->where('publication_status', 1)->get(),
                'categories' => News::where('publication_status', 1)->get(),
                'subcategory' => Subcategories::where('category_id',$id)->where('publication_status', 1)->get(),
                'categoryname' => News::where('id',$id)->where('publication_status', 1)->get()


            ]);
    }

    public function subcategoryBlog($id,$name)
    {

        return view('front.category.subcategory-blog',
            [
                'blogs' => Blog::where('subcategory_name',$name)->where('publication_status', 1)->get(),
                'categories' => News::where('publication_status', 1)->get(),
                'subcategory' => Subcategories::where('category_id',$id)->where('publication_status', 1)->get(),
                'categoryname' => News::where('id',$id)->where('publication_status', 1)->get()


            ]);
    }

    public function blogDetails($id)
    {
        $blog = Blog::find($id);
        $blog->hit_count = $blog->hit_count + 1;
        $blog->save();
        return view('front.blog.blog-details',[
            'categories' => News::where('publication_status', 1)->get(),
            'news' => Blog::where('publication_status', 1)->get(),
            'blog' => Blog::find($id),
            'comments' => DB::table('comments')
                            ->join('visitors','comments.visitor_id', '=', 'visitors.id')
                            ->select('comments.*','visitors.first_name','visitors.last_name')
                            ->where('comments.blog_id',$id)
                            ->orderBy('comments.id','desc')
                            ->get(),

            'reporter' => User::where('users.id',7)->get()
        ]);
    }
}
