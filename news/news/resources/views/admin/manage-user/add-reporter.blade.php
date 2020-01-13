@extends('admin.master3')

@section('title')
    Add Reporter
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            </br>
            <div class="well">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>
                <form style="align-items: center; font-feature-settings: inherit; font-family: sans-serif; border-radius: 4px; display: block;" action="{{route('new-user')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3"> User Name</label>
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Email Address</label>
                        <div class="col-md-4">
                            <input type="text" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"> User Type</label>
                        <div class="col-md-4">

                            <select type="text" name="user_type" class="col-md-12">
                                <option>Admin</option>
                                <option>Reporter</option>
                                <option>User</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"> Password</label>
                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"> Confirm Password</label>
                        <div class="col-md-4">
                            <input type="password" name="confirm_password" class="form-control" required autocomplete="new-password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"> Image</label>
                        <div class="col-md-4">
                            <input type="file" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="submit"/>
                        </div>
                    </div>
                </form>

            </div>


        </div>


    </div>

@endsection
