
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('/') }}front/favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/cs-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/cs-skin-border.css">

    <link rel="stylesheet" href="{{ asset('/') }}front/css/style.css">


    <!-- Modernizr JS -->
    <script src="{{ asset('/') }}front/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/') }}front/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="{{ route('/') }}"><i class="icon-airplane"></i>Travel</a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active"><a href="{{ route('/') }}">Home</a></li>
                            <li>
                                <a href="{{ route('vacation') }}" class="fh5co-sub-ddown">Vacations</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="{{ route('vacation') }}">BD Holidays</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">....</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">....</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('view-flight')}}">Flights</a></li>
                            <li><a href="{{route('hotel-list')}}">Hotel</a></li>
                            {{--<li><a href="#">Car</a></li>--}}
                            {{--<li><a href="#">Blog</a></li>--}}
                            @if (Session::get('visitorId'))
                                <li class="nav-item dropdown"><a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="" target = "blank">{{Session::get('visitorName')}}</a>
                                <ul class="dropdown-menu">
                                    <li> <a href="{{ route('/') }}" class="dropdown-item-text"
                                    ">profile Info</a> </li>
                                    <li> <a href="{{ route('/') }}" class="dropdown-item-text" onclick="event.preventDefault();
                                    document.getElementById('userlogoutform').submit();
                                    ">Logout</a> </li>
                                </ul>
                                    <form id="userlogoutform" action="{{ Route('user-logout') }}" method="POST"  >
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li><a href="{{ route('/front/login') }}" target = "blank">Login</a></li>
                                <li><a href="{{ route('sign-up') }}">Sign Up</a></li>
                            @endif

                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        @yield('body');

        <!-- end:header-top -->


        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>About Travel</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>Top Flights Routes</h3>
                            <ul>
                                <li><a href="#">Manila flights</a></li>
                                <li><a href="#">Dubai flights</a></li>
                                <li><a href="#">Bangkok flights</a></li>
                                <li><a href="#">Tokyo Flight</a></li>
                                <li><a href="#">New York Flights</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>Top Hotels</h3>
                            <ul>
                                <li><a href="#">Boracay Hotel</a></li>
                                <li><a href="#">Dubai Hotel</a></li>
                                <li><a href="#">Singapore Hotel</a></li>
                                <li><a href="#">Manila Hotel</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>Interest</h3>
                            <ul>
                                <li><a href="#">Beaches</a></li>
                                <li><a href="#">Family Travel</a></li>
                                <li><a href="#">Budget Travel</a></li>
                                <li><a href="#">Food &amp; Drink</a></li>
                                <li><a href="#">Honeymoon and Romance</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>Best Places</h3>
                            <ul>
                                <li><a href="#">Boracay Beach</a></li>
                                <li><a href="#">Dubai</a></li>
                                <li><a href="#">Singapore</a></li>
                                <li><a href="#">Hongkong</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>Affordable</h3>
                            <ul>
                                <li><a href="#">Food &amp; Drink</a></li>
                                <li><a href="#">Fare Flights</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                            <p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="{{ asset('/') }}front/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{ asset('/') }}front/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/') }}front/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{ asset('/') }}front/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}front/js/sticky.js"></script>

<!-- Stellar -->
<script src="{{ asset('/') }}front/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="{{ asset('/') }}front/js/hoverIntent.js"></script>
<script src="{{ asset('/') }}front/js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="{{ asset('/') }}front/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/') }}front/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="{{ asset('/') }}front/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="{{ asset('/') }}front/js/classie.js"></script>
<script src="{{ asset('/') }}front/js/selectFx.js"></script>

<!-- Main JS -->
<script src="{{ asset('/') }}front/js/main.js"></script>

</body>
</html>

