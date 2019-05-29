@extends('front.signup.master')

@section('title')
    signup
@endsection

@section('body')

    <div class="wrapper">
        <div class="inner">
            <form action="{{ route('user-sign-up') }}" method="POST">
                @csrf
                <h3>Be a Member</h3>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">First Name *</label>
                        <input type="text" name="first_name" required class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Last Name *</label>
                        <input type="text" name="last_name" required class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">Username *</label>
                        <input type="text" name="username" required class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Contact number</label>
                        <input type="text" name="contact_num" required class="form-control" placeholder="Contact">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">E-mail Address *</label>
                        <input type="e-mail" name="email" required class="form-control" placeholder="@gmail.com" onblur="emailcheck(this.value);">
                        <span id="res" class="text-success"> </span>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Gender *</label>
                        <select type="text" name="gender" required class="form-control" placeholder="select">
                            <option> Male </option>
                            <option> Female </option>
                            <option> other </option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">Password *</label>

                        <input type="password" name="password" required class="form-control" data-language='en'>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Confirm Password *</label>
                        <input type="password" name="confirm_password" class="form-control" data-language='en'>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-wrapper">
                        <label for="">NID *</label>

                        <input type="text" name="nid" required class="form-control" data-language='en'>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Passport No </label>
                        <input type="text" name="passport_no" required class="form-control" data-language='en'>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to all terms and condition of this website
                        <span class="checkmark"></span>
                    </label>
                </div>
                <button type="submit" data-text="Register">
                    <span>Register</span>
                </button>
            </form>
        </div>
    </div>
    <script>
        function emailcheck(email) {

            var xmlHttp = new XMLHttpRequest;
            var serverpage = 'http://localhost/webpro1/public/email-check/' +email;
            xmlHttp.open('GET',serverpage);
            xmlHttp.onreadystatechange = function () {
                if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
                {
                    document.getElementById('res').innerHTML = xmlHttp.responseText;
                }
            }

            xmlHttp.send();


        }
    </script>
    @endsection