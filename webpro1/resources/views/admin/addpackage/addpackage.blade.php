@extends('admin.master')

@section('title')
    admin
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <form style="align-items: center; position: center" action="{{ route('new-add-package') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-6"> Package Name </label>
                        <div class="col-md-9">
                            <input type="text" name="package_name" class="form-control" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Package Description </label>
                        <div class="col-md-9">
                            <input type="text" name="package_description" class="form-control" >
                        </div>


                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Package Price </label>
                        <div class="col-md-9">
                            <input type="number" name="package_price" class="form-control" >
                        </div>

                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-6"> Package Image </label>
                        <div class="col-md-9">
                            <input type="file" name="package_image" class="form-control" >
                        </div>

                    </div>
                    <div class="form-group">
                        <button style="color: green" type="submit" > Submit</button>
                    </div>

                </form>


            </div>
        </div>
    </div>


@endsection


