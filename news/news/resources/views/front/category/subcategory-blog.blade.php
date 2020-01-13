@extends('front.master')
@section('title')
    Newspaper
@endsection

@section('body')
    <div class="container">
        @foreach($categoryname as $category)
            <h3 class="my-4">{{$category->news_name}}</h3>
    @endforeach
    <!-- Marketing Icons Section -->


        <div class="design">
            @foreach($subcategory as $subcategories)
                <li class="nav-link"><a class="" href="{{route('subcategory-blog',['id'=>$subcategories->category_id,'name' =>$subcategories->subcategories_name])}}">{{$subcategories->subcategories_name}}</a></li>
            @endforeach

        </div>


        <p></p>

        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{asset($blog->blog_image)}}" alt="{{$blog->blog_title}}" class="card-img-top" height="200"/>

                        <div class="card-body">
                            <a href="{{route('blog-details',['id'=>$blog->id])}}"><h4 class="card-title"> {{$blog->blog_title}}</h4></a>
                            <p class="card-text">{{$blog->blog_short_description}}</p>
                        </div>


                    </div>
                </div>
            @endforeach

        </div>

    </div>


    @endsection