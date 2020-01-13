@extends('admin.master3')

@section('title')
    Edit Subcategories
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            </br>
            <div class="well">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>
                <form style="align-items: center; font-feature-settings: inherit; font-family: sans-serif; border-radius: 4px; display: block;" action="{{route('update-subcategories')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Subcategories  Type</label>
                        <div class="col-md-9">
                            <input type="text" name="subcategories_name" class="form-control" value="{{$subcategories->subcategories_name}}"/>
                            <input type="hidden" name="id" class="form-control" value="{{$subcategories->id}}"/>
                            <input type="hidden" name="category_id" class="form-control" value="{{$subcategories->category_id}}"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3"> Subcategories Description</label>
                        <div class="col-md-9">
                            <textarea name="subcategories_description" class="form-control">{{$subcategories->subcategories_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3"> Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{$subcategories->publication_status == 1 ? 'checked' : ''}}name="publication_status" value="1"/>Published</label>
                            <label><input type="radio" {{$subcategories->publication_status == 0 ? 'checked' : ''}} name="publication_status" value="0"/>UnPublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Subcategories info"/>
                        </div>
                    </div>
                </form>

            </div>


        </div>


    </div>

@endsection
