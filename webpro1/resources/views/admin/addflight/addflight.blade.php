@extends('admin.master')

@section('title')
    add Flight
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <form style="align-items: center; position: center" action="{{route('new-add-flight')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-6">  From </label>
                        <div class="col-md-9">
                            <input type="text" name="from" class="form-control" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Destination </label>
                        <div class="col-md-9">
                            <input type="text" name="destination" class="form-control" >
                        </div>


                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Check In </label>
                        <div class="col-md-9">
                            <input type="date" name="check_in" class="form-control" >
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-6"> Check Out </label>
                        <div class="col-md-9">
                            <input type="date" name="check_out" class="form-control" >
                        </div>

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


