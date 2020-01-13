<!DOCTYPE html>
<br lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="{{asset('/')}}front/logo/link.png">
    <link href="{{asset('/')}}front/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}front/css/modern-business.css" rel="stylesheet">
    <link href="{{asset('/')}}front/css/footer.css" rel="stylesheet">
    <link href="{{asset('/')}}front/css/sidebar.css" rel="stylesheet">
    <link href="{{asset('/')}}front/css/breaking.css" rel="stylesheet">
    <link href="{{asset('/')}}front/css/animate.css" rel="stylesheet">
	<link href="{{asset('/')}}front/css/responsive.css" rel="stylesheet">
	<link href="{{asset('/')}}front/css/news.css" rel="stylesheet">


</head>

<br>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
       <a href="{{route('/')}}"><img src="{{asset('/')}}front/logo/images.png"  height="50" width="100"  margin-left = "0" ></a>

        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-size: 16px;">
            <ul class="navbar-nav ml-auto">
                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category-blog',['id'=>$category->id,'name' =>$category->news_name])}}">{{$category->news_name}}</a>
                </li>
                @endforeach

                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>




                    <li class="nav-item">
                        <input type="text" placeholder="Search...">
                    </li>


				


            </ul>
        </div>

        @if(Session::get('visitorId'))

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Session::get('visitorName') }}
                    <i class="fas fa-user-circle fa-fw" ></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick = "event.preventDefault(); document.getElementById('logoutForm').submit();" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    <form id = "logoutForm" action = "{{route('visitor-logout')}}" method = "POST">
                        @csrf
                    </form>

                </div>
            </li>



        @endif
    </div>
</nav>

@yield('header')


<!-- Page Content -->
@yield('body')
<!-- /.container -->

<!-- Footer -->
    <footer>
    <div class="foot-portion">

        <div class="foot_wrap_bg" style="">
    <div class="foot-middle-container">
        <div class="foot_big_menu big_menu">
            <div class="big_menu_top">
                <div class="all-menu">
                    <ul id="8">
                        @foreach($categories as $category)
                        <li class="menu_page_id_37 menu_color_"><a class="static " href="{{route('category-blog',['id'=>$category->id,'name' =>$category->news_name])}}">{{$category->news_name}}</a></li>
                        @endforeach
                        </ul>
                        </div>
                <script type="text/javascript">
                    jw_menu_fixer('.footer_menu','navigation');
                </script>
                <div class="special_menu">
                    <ul>
                        <li><a class="image_menu_icon" href="/photo">ছবি</a></li>
                        <li><a class="video_menu_icon" href="/video">ভিডিও</a></li>
                        <li><a class="archive_menu_icon" href="/archive">আর্কাইভ</a></li>
                    </ul>
                </div>
            </div>
            <div class="big_menu_bottom">
                <div class="bmenu_bottom_left">
                    <div class="bmenu_bottom_toplinks">
                        <ul id="6"><li class="menu_page_id_540 menu_color_"><a class="static " href="/advertise" target="_blank">বিজ্ঞাপন</a></li><li class="menu_page_id_544 menu_color_"><a class="static " href="/circulation" target="_blank">সার্কুলেশন</a></li><li class="menu_page_id_820 menu_color_"><a class="static " href="/hajj" target="_blank">পবিত্র হজ</a></li><li class="menu_page_id_736 menu_color_"><a class="dynamic archive" href="/durporobash" target="_blank">দূর পরবাস</a></li><li class="menu_page_id_536 menu_color_"><a class="dynamic " href="/northamerica" target="_blank">উত্তর আমেরিকা</a></li></ul>									  </div>
                    <script type="text/javascript">
                        jw_menu_fixer('.footer_menu','navigation');
                    </script>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    </footer>



<!-- Bootstrap core JavaScript -->
<script src="{{asset('/')}}front/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $("#popularnews1").hide();
        $("#latestnews").click(function () {
            $("#latestnews1").show();
            $("#popularnews1").hide();
            return false;
        });

        $("#popularnews").click(function () {
            $("#popularnews1").show();
            $("#latestnews1").hide();
            return false;
        });

    });
</script>


</body>

</html>
