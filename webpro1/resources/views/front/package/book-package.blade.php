@extends('front.master')

@section('title')
    Book Package
@endsection

@section('body')
    <section style="margin-top: 30px">
        <div class="container">
            <h2 class="text-center text-success">{{ Session::get('message') }}</h2>
            <div class="col-md-2">

            </div>
            <div class="wrapper col-md-8">
                <div class="inner">
                    <form action="{{route('book-package')}}" method="POST">
                        @csrf
                        <h3>Package Booking</h3>
                        <div class="form-row">
                            <div class="form-wrapper">
                                <label for="">First Name *</label>
                                <input type="text" name="first_name"  required class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-wrapper">
                                <label for="">Last Name *</label>
                                <input type="text" name="last_name" required class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-row">

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

                            <div class="form-wrapper">
                                <label for="">Select Package *</label>
                                <p><select type="text" name="select_package" required class="col-md-9">
                                        <option>Bandhorban</option>
                                        <option>CoxsBazar</option>
                                        <option>Saintmartin</option>
                                        <option>Sajek</option>
                                        <option>Sylhet</option>
                                    </select></p>

                            </div>
                        <p></p>

                        <div class="form-row">
                            <div class="form-wrapper">
                                <label for="">NID *</label>

                                <input type="text" name="nid" class="form-control" required data-language='en'>
                            </div>
                            <div class="form-wrapper">
                                <label for="">Passport No </label>
                                <input type="text" name="passport_no" class="form-control" required data-language='en'>
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
        </div>
    </section>
@endsection