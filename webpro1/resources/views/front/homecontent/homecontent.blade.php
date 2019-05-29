@extends('front.master')

@section('title')
    home
@endsection

@section('body')

    <div id="fh5co-destination">
        <div class="tour-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul id="fh5co-destination-list" class="animate-box">
                        <li class="one-forth text-center" style="background-image: url(front/images//bandarban/nilgiri.jpg);">
                            <a href="{{route('bandhorban')}}">
                                <div class="case-studies-summary">
                                    <h2>Bandarban</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-forth text-center" style="background-image: url({{asset('/')}}front/images/coxbazar/coxsbazar.jpg); ">
                            <a href="#">
                                <div class="case-studies-summary">
                                    <h2>Coxsbazar</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-forth text-center" style="background-image: url({{asset('/')}}front/images/coxbazar/saintmartin.jpg); ">
                            <a href="#">
                                <div class="case-studies-summary">
                                    <h2>Saintmartin</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-forth text-center" style="background-image: url({{asset('/')}}front/images/kuakata/kuakata1.jpg); ">
                            <a href="#">
                                <div class="case-studies-summary">
                                    <h2>Kuakata</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-forth text-center" style="background-image: url({{asset('/')}}front/images/sajek/1.sajek.jpg); ">
                            <a href="#">
                                <div class="case-studies-summary">
                                    <h2>Sajek</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-half text-center">
                            <div class="title-bg">
                                <div class="case-studies-summary">
                                    <h2>Most Popular Destinations</h2>
                                    <span><a href="#">View All Destinations</a></span>
                                </div>
                            </div>
                        </li>
                        <li class="one-forth text-center" style="background-image: url({{asset('/')}}front/images/sylhet/Sreemongol.jpg); ">
                            <a href="#">
                                <div class="case-studies-summary">
                                    <h2>Sylhet</h2>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('/') }}front/images/cover_bg_1.jpg);">
            <div class="desc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
                            <div class="tabulation animate-box">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content" style="background-image: url("{{asset('/')}}")>
                                    <div role="tabpanel" class="tab-pane active" id="flights">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">From:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">To:</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Check In:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Class:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>Economy</option>
                                                        <option value="economy">Economy</option>
                                                        <option value="first">First</option>
                                                        <option value="business">Business</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Flight">
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="hotels">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">City:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Return:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Rooms:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="economy">1</option>
                                                        <option value="first">2</option>
                                                        <option value="business">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="packages">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">City:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Destination:</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Departs:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Return:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Rooms:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="economy">1</option>
                                                        <option value="first">2</option>
                                                        <option value="business">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Packages">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="desc2 animate-box">
                            <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                                <p>  <a href="" target="_blank" class="fh5co-site-name"></a></p>
                                <h2>Exclusive Limited Time Offer</h2>
                                <h3>Fly Bangladesh to kashmir </h3>
                                <span class="price">$100</span>
                                <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="fh5co-tours" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Hot Tours</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                @foreach($packages as $package)
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                    <div href="#"><img src="{{ asset($package->package_image) }}" alt=" " style="height: 300px;width: 100%" class="img-responsive">
                        <div class="desc">
                            <span></span>
                            <h3>{{ $package->package_name }}</h3>
                            <span>{{ $package->package_description }}</span>
                            <span class="price">{{ $package->package_price }}</span>
                            <a class="btn btn-primary btn-outline" href="{{ route('book-now') }}">Book Now <i class="icon-arrow-right22"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                    <div href="#"><img src="{{ asset('/') }}front/images/place-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <div class="desc">
                            <span></span>
                            <h3>Philippines</h3>
                            <span>4 nights + Flight 5*Hotel</span>
                            <span class="price">$1,000</span>
                            <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                    <div href="#"><img src="{{ asset('/') }}front/images/place-3.jpg" alt="" class="img-responsive">
                        <div class="desc">
                            <span></span>
                            <h3>Hongkong</h3>
                            <span>2 nights + Flight 4*Hotel</span>
                            <span class="price">$1,000</span>
                            <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">

                    <div class="feature-left">
							<span class="icon">
								<i class="icon-hotairballoon"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Family Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Travel Plans</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Honeymoon</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">

                    <div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Business Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Solo Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
                        <div class="feature-copy">
                            <h3>Explorer</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Recent From Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{ asset('/') }}front/images/4.tanguar.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">30% Discount to Travel All Around the World</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{ asset('/') }}front/images/4.sajek.jpeg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Planning for Vacation</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{ asset('/') }}front/images/4.fatrarchor.jpg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title">
                                <h3><a href="#">Visit Tokyo Japan</a></h3>
                                <span class="posted_by">Sep. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-md-block"></div>
            </div>

            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
            </div>

        </div>
    </div>
    <!-- fh5co-blog-section -->
    <div id="fh5co-testimonial" style="background-image:url({{ asset('/') }}front/images/img_bg_1.jpg);">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class="author"> <a href="#"></a> <span class="subtext">Creative Director</span></p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                        </blockquote>
                        <p class="author"> <a href="#" target="_blank"></a> <span class="subtext">Creative Director</span></p>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="box-testimony animate-box">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class="author"> <a href="#"></a> <span class="subtext"></span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


