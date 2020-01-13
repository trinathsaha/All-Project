@extends('admin.master3')

@section('title')
    Edit Blog
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            </br>
            <div class="well">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>
                <form style="align-items: center; font-feature-settings: inherit; font-family: sans-serif; border-radius: 4px; display: block;" action="{{route('update-blog')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editBlogForm">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3"> News Type</label>
                        <div class="col-md-9">
                            <select id="editcategory" name="category_id" class="form-control input-group-lg dynamic">
                                @foreach($news as $category)
                                    <option value="{{$category->id}}">{{$category->news_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="reporter_id" value="{{$blog->reporter_id}}">
                    <div class="form-group">
                        <label class="control-label col-md-3"> Subcategory Type</label>
                        <div class="col-md-9">
                            <select id="subcategory" name="subcategory_name" class="form-control">
                                <option value="{{$blog->subcategory_name}}"  selected="true"> {{$blog->subcategory_name}} </option>
                                {{--@foreach($subcategory as $subcategories)--}}
                                {{--<option value="{{$subcategories->id}}">{{$subcategories->subcategories_name}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Title</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_title" value="{{$blog->blog_title}}" class="form-control"/>
                            <input type="hidden" name="id" value="{{$blog->id}}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Short Description</label>
                        <div class="col-md-9">
                            <textarea name="blog_short_description" class="form-control">{{$blog->blog_short_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Long Description</label>
                        <div class="col-md-9">
                            <textarea id="editor" name="blog_long_description" class="form-control">{{$blog->blog_long_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Image</label>
                        <div class="col-md-9">
                            <input type="file" name="blog_image" accept="image/*"/>
                        </br>
                            <img src="{{asset($blog->blog_image)}}" height="100" width="120">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3"> Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{$blog->publication_status == 1 ? 'checked': ''}} name="publication_status" value="1"/>Published</label>
                            <label><input type="radio" {{$blog->publication_status == 0 ? 'checked': ''}} name="publication_status" value="0"/>UnPublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Blog info"/>
                        </div>
                    </div>
                </form>

            </div>


        </div>


    </div>
    <script>
        document.forms['editBlogForm'].elements['category_id'].value = '{{$blog->category_id}}';
    </script>
@endsection

