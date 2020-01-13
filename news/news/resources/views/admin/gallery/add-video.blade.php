@extends('admin.master3')

@section('title')
    Add Video
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            </br>
            <div class="well">
                <h6 class="text-center text-success">{{Session::get('message')}}</h6>
                <form style="align-items: center; font-feature-settings: inherit; font-family: sans-serif; border-radius: 4px; display: block;" action="{{route('new-video')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
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
                        <label class="control-label col-md-3"> Video Title</label>
                        <div class="col-md-9">
                            <input type="text" name="video_title" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Video Short Description</label>
                        <div class="col-md-9">
                            <textarea name="video_short_description" class="form-control"></textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3"> Video File</label>
                        <div class="col-md-9">
                            <input class="uploader" type="file" name="video" id="video">
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
