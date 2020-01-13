<?php

namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('admin.blog.add-blog',[
            'news' => News::where('publication_status',1)->get()
        ]);
    }

    private function Imageupload($blogImage){
        $imageName = $blogImage->getClientOriginalName();
        $directory = 'blog images/';
        $blogImage->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function newBlog(Request $request)
    {
        $blog = new Blog();
        $blog->category_id              = $request->category_id;
        $blog->reporter_id              = $request->reporter_id;
        $blog->subcategory_name         = $request->subcategory_name;
        $blog->blog_title               = $request->blog_title;
        $blog->blog_short_description   = $request->blog_short_description;
        $blog->blog_long_description    = $request->blog_long_description;
        $blog->blog_image               = $this->Imageupload($request->file('blog_image'));
        $blog->division_name      = $request->division_name;
        $blog->district_name      = $request->district_name;
        $blog->upazilla_name      = $request->upazilla_name;
        $blog->publication_status       = $request->publication_status;
        $blog->save();

        return redirect('/blog/add-blog')->with('message','Blog info created successfully');
    }

    public function manageBlog()
    {
        $blogs = DB::table('blogs')
                 ->join('news','blogs.category_id','=','news.id')
                ->select('blogs.*','news.news_name')
                 ->orderBy('blogs.id','desc')
                 ->get();

        return view('admin.blog.manage-blog',[
            'blogs' => $blogs
        ]);
    }

    public function editBlog($id)
    {
        return view('admin.blog.edit-blog',[
            'news' => News::where('publication_status',1)->get(),
            'blog' => Blog::find($id)
        ]);
    }

    public function updateBlog(Request $request){
        $blog = Blog::find($request->id);
        $blogImage      = $request->file('blog_image');
        if($blogImage) {
            unlink($blog->blog_image);
            $imagePath = $this->Imageupload($blogImage);
        }
        $blog->category_id              = $request->category_id;
        $blog->reporter_id              = $request->reporter_id;
        $blog->subcategory_name       = $request->subcategory_name;
        $blog->blog_title               = $request->blog_title;
        $blog->blog_short_description   = $request->blog_short_description;
        $blog->blog_long_description    = $request->blog_long_description;
        if(isset($imagePath)){
            $blog->blog_image           = $imagePath;
        }
        $blog->division_name      = $request->division_name;
        $blog->district_name      = $request->district_name;
        $blog->upazilla_name      = $request->upazilla_name;
        $blog->publication_status       = $request->publication_status;
        $blog->save();
        return redirect('/blog/manage-blog')->with('message','Blog info updated successfully');

    }



    public function deleteBlog(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->delete();
        unlink($blog->blog_image);
        return redirect('/blog/manage-blog')->with('message','Blog info deleted successfully');
    }

    public function fetch(Request $request)
    {

        $category=Subcategories::select('subcategories_name','id')->where('category_id',$request->cat_id)->take(100)->get();


        return response()->json($category);

    }


    public function front(Request $request)
    {

        $managecategory=Subcategories::select('subcategories_name','id')->where('category_id',$request->cat_id)->take(100)->get();


        return response()->json($managecategory);

    }

}
