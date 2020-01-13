@extends('admin.master3')

@section('title')
    Edit News
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            </br>
            <div class="well">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>
                <form style="align-items: center; font-feature-settings: inherit; font-family: sans-serif; border-radius: 4px; display: block;" action="{{route('update-news')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3"> News Type</label>
                        <div class="col-md-9">
                            <input type="text" name="news_name" class="form-control" value="{{$news->news_name}}"/>
                            <input type="hidden" name="id" class="form-control" value="{{$news->id}}"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3"> News Description</label>
                        <div class="col-md-9">
                            <textarea name="news_description" class="form-control">{{$news->news_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{$news->publication_status == 1 ? 'checked' : ''}}name="publication_status" value="1"/>Published</label>
                            <label><input type="radio" {{$news->publication_status == 0 ? 'checked' : ''}} name="publication_status" value="0"/>UnPublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update news info"/>
                        </div>
                    </div>
                </form>

            </div>


        </div>


    </div>

@endsection
