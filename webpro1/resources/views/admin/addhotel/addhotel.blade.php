@extends('admin.master')

@section('title')
    admin
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <form style="align-items: center; position: center" action="{{ route('new-add-hotel') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-6"> Hotel Name </label>
                        <div class="col-md-9">
                            <input type="text" name="hotel_name" class="form-control" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> City Name </label>
                        <div class="col-md-9">
                            <input type="text" name="city_name" class="form-control" >
                        </div>


                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Room No </label>
                        <div class="col-md-9">
                            <input type="number" name="room_no" class="form-control" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Adult </label>
                        <div class="col-md-9">
                            <input type="number" name="adult" class="form-control" >
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-6"> Children </label>
                        <div class="col-md-9">
                            <input style=" width: 100%;
                                   padding: 12px 20px;
                                   margin: 8px 0;
                                   box-sizing: border-box;" type="number" name="children" class="form-control" >
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-6"> Hotel Image </label>
                        <div class="col-md-9">
                            <input type="file" name="hotel_image"  class="form-control" />
                        </div>

                    </div>
                    <div class="form-group">
                        <button style="color: green" type="submit" name="submit"> Submit</button>
                        </div>



                </form>


            </div>
        </div>
    </div>


@endsection


