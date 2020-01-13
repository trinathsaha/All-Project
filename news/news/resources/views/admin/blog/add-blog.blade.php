@extends('admin.master3')

@section('title')
    Add Blog
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            </br>
            <div class="well">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>
                <form style="align-items: center; font-feature-settings: inherit; font-family: sans-serif; border-radius: 4px; display: block;" action="{{route('new-blog')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="control-label col-md-3"> News Type</label>
                        <div class="col-md-9">
                           <select id="category" name="category_id" class="form-control input-group-lg dynamic">
                               <option value="0" disabled="true" selected="true"> Select </option>
                               @foreach($news as $category)
                               <option value="{{$category->id}}">{{$category->news_name}}</option>
                                   @endforeach
                           </select>
                        </div>
                    </div>
                    <input type="hidden" name="reporter_id" value="{{Auth::id()}}">
                    <div class="form-group">
                        <label class="control-label col-md-3"> Subcategory Type</label>
                        <div class="col-md-9">
                            <select id="subcategory" name="subcategory_name" class="form-control">
                                <option value="0" disabled="true" selected="true"> Select Subcategory Name </option>
                                {{--@foreach($subcategory as $subcategories)--}}
                                    {{--<option value="{{$subcategories->id}}">{{$subcategories->subcategories_name}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Title</label>
                        <div class="col-md-9">
                            <input type="text" name="blog_title" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Short Description</label>
                        <div class="col-md-9">
                            <textarea name="blog_short_description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Long Description</label>
                        <div class="col-md-9">
                            <textarea id="editor" name="blog_long_description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Blog Image</label>
                        <div class="col-md-9">
                            <input type="file" name="blog_image" accept="image/*">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3"> News Location</label>
                        <div class="row">
                        <div class="col-md-3" >
                            <select type="text" name="division_name" style="margin: 0">
                            <option> ঢাকা </option>
                            <option> খুলনা</option>
                            <option> রাজশাহী </option>
                            <option> বরিশাল</option>
                            <option> কুমিল্লা</option>
                            <option> চট্টগ্রাম</option>

                            </select>


                        </div>
                            <div class="col-md-3">
                                <input type="text" name="district_name" placeholder="district name">

                            </div>

                            <div class="col-md-3">
                                <input type="text" name="upazilla_name" placeholder="Upazilla name">

                            </div>
                    </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3"> Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"/>Published</label>
                            <label><input type="radio" name="publication_status" value="0"/>UnPublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Blog info"/>
                        </div>
                    </div>
                </form>

            </div>


        </div>


    </div>



@endsection
