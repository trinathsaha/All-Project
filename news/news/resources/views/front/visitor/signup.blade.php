@extends('front.master')
@section('title')
    Newspaper
@endsection
@section('body')

    <div class="container">
        <div class="col-lg-7" style="background-color: #ddd; margin: auto">
            <br>

        <form action="{{route('new-visitor')}}" method="POST" style="margin: auto; ">
            @csrf
            <div class="form-group row">
            <label class="col-form-label col-md-3">First Name</label>
            <div class="col-md-7">
                <input type="text" name="first_name" class="form-control">
            </div>
        </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3">Last Name</label>
                <div class="col-md-7">
                    <input type="text" name="last_name" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-3">Email Address</label>
                <div class="col-md-7">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3">Contact Number</label>
                <div class="col-md-7">
                    <input type="number" name="contact_number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3">Password</label>
                <div class="col-md-7">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-3">Address</label>
                <div class="col-md-7">
                    <textarea type="text" name="address" class="form-control"></textarea>
                </div>
            </div>
                    <div class="form-group row" style=" margin: auto;
                width: 40%; padding: 8px;">
                <input style="align-content: center" type="submit" class="btn btn-success btn-block" value="Register"/>
            </div>

            <div class="form-group row">

                    <h6 style="margin: auto">Are you Already Member? <a href="{{route('visitor-login')}}">Login</a> here</h6>
                </div>
        </form>
        </div>

    </div>
    <br>

    @endsection