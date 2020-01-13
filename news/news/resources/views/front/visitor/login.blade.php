@extends('front.master')
@section('title')
    Newspaper
@endsection

@section('body')

    <div class="container">
        <div class="col-lg-7" style="background-color: #ddd; margin: auto">
            <br>
            <h6 style="color: red; margin: auto">{{Session::get('message')}}</h6>
            <form action="{{route('visitor-signin')}}" method="POST" style="margin: auto; ">
                @csrf
                <div class="form-group row">
                    <label class="col-form-label col-md-3">Email Address</label>
                    <div class="col-md-7">
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3">Password</label>
                    <div class="col-md-7">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row" style=" margin: auto;
                width: 40%; padding: 8px;">
                    <input style="align-content: center" type="submit" class="btn btn-success btn-block" value="Login"/>
                </div>
            </form>
        </div>
    </div>
    <br>
    @endsection