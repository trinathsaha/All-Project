@extends('front.master')
@section('title')
    Newspaper
@endsection
@section('header')
    <section>
        <div id="breaking-news-container" style="position: center">
            <div id="breaking-news-colour" class="slideup animated">

            </div>
            <span class="breaking-news-title delay-animated slidein">
      // BREAKING //
    </span>
            <a class="breaking-news-headline delay-animated2 fadein marquee">
                @foreach($blogs as $blog) {{$blog->blog_title}} !! @endforeach
            </a>
        </div>
    </section>
@endsection


@section('body')
    <br>
    <br>
    <div class="container">

        <div class="row">


            @foreach($packages as $package)
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box fadeInUp animated" data-animate-effect="fadeIn">
                    <div href="#"><img src="{{ asset($package->blog_image) }}" alt=" " style="height: 300px;width: 100%"
                                       class="img-responsive">
                        <div class="desc">
                            <span></span>
                            <a href="{{route('blog-details',['id'=>$package->id])}}"><h3>{{ $package->blog_title }}</h3>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


                <div class="col-md-4">
                    @foreach($blogs as $blog)
                        <div class="row" style="border-style: none">
                            <div class="col-md-6 mb-6" style="height: 80px;">

                                <img src="{{asset($blog->blog_image)}}" alt="" height="70" width="140"
                                     href="{{route('blog-details',['id'=>$blog->id])}}">
                            </div>

                            <div class="col-md-6 mb-6 news">

                                <a href="{{route('blog-details',['id'=>$blog->id])}}"
                                   style="color: black; font-weight: bold; text-decoration: none; font-size: 16px "><h6
                                            class=""
                                            style="text-align: left; width: 150px; display: block;"> {{ $blog->blog_title}}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>


            <div class="col-md-4">


                <div class="row">
                    <div class="col-md-6 mb-6" id="latestnews" style="color: white; background-color: dodgerblue">
                        Latest
                    </div>
                    <div class="col-md-6 mb-6" id="popularnews" style="color: dodgerblue;">
                        Most Popular
                    </div>


                <div class="test" id="latestnews1">

                        @foreach($blogs as $blog)
                            <div class="row" style="border-style: none">
                                <div class="col-md-6 mb-6" style="height: 80px;">

                                    <img src="{{asset($blog->blog_image)}}" alt="" height="60" width="120"
                                         href="{{route('blog-details',['id'=>$blog->id])}}" style="align-content: center">
                                </div>

                                <div class="col-md-6 mb-6 news">

                                    <a href="{{route('blog-details',['id'=>$blog->id])}}"
                                       style="color: black; font-weight: bold; text-decoration: none; font-size: 16px "><h6
                                                class=""
                                                style="text-align: left; width: 150px; display: block;"> {{ $blog->blog_title}}</h6>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                </div>


                <div class="test" id="popularnews1">


                        @foreach($blogs as $blog)
                            <div class="row" style="border-style: none">
                                <div class="col-md-6 mb-6" style="height: 80px;">

                                    <img src="{{asset($blog->blog_image)}}" alt="" height="60" width="120"
                                         href="{{route('blog-details',['id'=>$blog->id])}}" style="align-items: center">
                                </div>

                                <div class="col-md-6 mb-6 news">

                                    <a href="{{route('blog-details',['id'=>$blog->id])}}"
                                       style="color: black; font-weight: bold; text-decoration: none; font-size: 16px "><h6
                                                class=""
                                                style="text-align: left; width: 150px; display: block;"> {{ $blog->blog_title}}</h6>
                                    </a>
                                </div>
                            </div>
                        @endforeach


                </div>
            </div>
            </div>


        </div>
    </div>


    <section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3> সবচেয়ে</h3>
            </div>
            <div class="col-md-7">
                <h3> বাংলাদেশ</h3>
            </div>
        </div>
        <br>
        <div class="row">

        <div class="col-md-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">শেষ</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">আলোচিত</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">নির্বাচিত</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"></div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
            <div class="col-md-4">
            <select style="width: 150px">
                <option value="0" disabled="true" selected="true"> বিভাগ </option>
            </select>
            </div>
            <div class="col-md-4">
            <select>
                <option value="0" disabled="true" selected="true"> জেলা </option>
            </select>
            </div>
            <div class="col-md-4">
            <select>
                <option value="0" disabled="true" selected="true"> থানা </option>
            </select>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <div class="container">

        <h1 class="my-4">Sports</h1>

        <!-- Marketing Icons Section -->
        <div class="row">

            @foreach($sports as $sport)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{asset($sport->blog_image)}}" alt="{{$sport->blog_title}}" class="card-img-top"
                             height="200"/>

                        <div class="card-body">
                            <a style=" " href="{{route('blog-details',['id'=>$sport->id])}}"><h4
                                        class="card-title"> {{$sport->blog_title}}</h4></a>
                            <p class="card-text">{{$sport->blog_short_description}}</p>
                        </div>


                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <div class="container">
        <h1 class="my-4">Binodon</h1>

        <div class="row">


            @foreach($binodon as $binodons)
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box fadeInUp animated" data-animate-effect="fadeIn"
                     style="display: block; border-style: groove">
                    <div href="#"><img src="{{ asset($binodons->blog_image) }}" alt=" "
                                       style="height: 300px;width: 100%" class="img-responsive">
                        <div class="desc">
                            <span></span>
                            <a href="{{route('blog-details',['id'=>$binodons->id])}}">
                                <h3>{{ $binodons->blog_title }}</h3></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <h1 class="my-4">Bangladesh</h1>

        <div class="row" style="background-color: #ddd">

            @foreach($binodon as $binodons)
                <div class="col-md-3 col-sm-4 fh5co-tours animate-box fadeInUp animated" data-animate-effect="fadeIn"
                     style="background-color: white">
                    <div href="#"><img src="{{ asset($binodons->blog_image) }}" alt=" "
                                       style="height: 100px;width: 80%; background-color: white" class="img-responsive">
                        <p><a href="{{route('blog-details',['id'=>$binodons->id])}}" style="background-color: white">
                                <h4>{{ $binodons->blog_title }}</h4></a></p>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="container">
        <h1>Bangladesh</h1>

        <div class="row">


            @foreach($binodon as $binodons)
                <div class="col-md-3 col-sm-4 fh5co-tours animate-box fadeInUp animated" data-animate-effect="fadeIn">
                    <div href="#"><img src="{{ asset($binodons->blog_image) }}" alt=" " style="height: 120px;width: 90%"
                                       class="img-responsive">
                        <p><a href="{{route('blog-details',['id'=>$binodons->id])}}">
                                <h4>{{ $binodons->blog_title }}</h4></a></p>
                        <p><a><h6>{{ $binodons->blog_short_description }}</h6></a></p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container" style="background: #efefec;">
        <div class="row">
            <div class="col-md-3">
                <h3 class="my-4">বিনোদন</h3>

                <!-- Marketing Icons Section -->

                @foreach($binodon as $binodons)
                    <div class="col-lg-12 mb-12" style="background: white;">


                        <div class="title-content">
                            <a style="color: #1b1e21;" href="{{route('blog-details',['id'=>$binodons->id])}}">
                                <h5> {{$binodons->blog_title}}</h5></a>
                        </div>

                    </div>

                @endforeach
            </div>
            <div class="col-md-3">
                <h3 class="my-4">অর্থনীতি</h3>

                <!-- Marketing Icons Section -->

                @foreach($orthoniti as $orthonitis)
                    <div class="col-lg-12 mb-12" style="background: white;">


                        <div class="title-content">
                            <a style="color: #1b1e21;" href="{{route('blog-details',['id'=>$orthonitis->id])}}"><h5
                                        class="card-title"> {{$orthonitis->blog_title}}</h5></a>
                        </div>


                    </div>

                @endforeach
            </div>
            <div class="col-md-3">
                <h3 class="my-4">আন্তর্জাতিক</h3>

                <!-- Marketing Icons Section -->

                @foreach($international as $internationals)
                    <div class="col-lg-12 mb-12" style="background: white;">


                        <div class="title-content">
                            <a style="color: #1b1e21;" href="{{route('blog-details',['id'=>$internationals->id])}}"><h5
                                        class="card-title"> {{$internationals->blog_title}}</h5></a>
                        </div>


                    </div>

                @endforeach
            </div>

            <div class="col-md-3">
                <h3 class="my-4">All</h3>

                <!-- Marketing Icons Section -->

                @foreach($blogs as $blog)
                    <div class="col-lg-12 mb-12" style="background: white;">


                        <div class="title-content">
                            <a style="color: #1b1e21;" href="{{route('blog-details',['id'=>$blog->id])}}"><h5
                                        class="card-title"> {{$blog->blog_title}}</h5></a>
                        </div>


                    </div>

                @endforeach
            </div>
        </div>


    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->

    <!-- /.row -->

    <!-- Features Section -->

    <!-- /.row -->


    <section>
        <div class="container">
            <h3>Bangladesh</h3>

            <div class="row">


                @foreach($entertain as $entertains)
                    <div class="col-md-3 col-sm-4 fh5co-tours animate-box fadeInUp animated"
                         data-animate-effect="fadeIn">
                        <div href="#"><img src="{{ asset($entertains->blog_image) }}" alt=" "
                                           style="height: 120px;width: 90%" class="img-responsive">
                            <p><a href="{{route('blog-details',['id'=>$entertains->id])}}">
                                    <h4>{{ $entertains->blog_title }}</h4></a></p>
                            <p><a><h6>{{ $entertains->blog_short_description }}</h6></a></p>

                        </div>
                    </div>
                @endforeach
                <div class="col-md-3">
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-md-4 mb-4">
                                <img src="{{asset($blog->blog_image)}}" alt="" height="50" width="75"
                                     href="{{route('blog-details',['id'=>$blog->id])}}">
                            </div>
                            <div class="col-md-7 mb-7">
                                <a href="{{route('blog-details',['id'=>$blog->id])}}"
                                   style="color: black; font-weight: bold; text-decoration: none; font-size: 16px "><h6
                                            class=""
                                            style="text-align: left; width: 150px; display: block;"> {{ $blog->blog_title}}</h6>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                    @foreach($entertain as $entertains)
                        <div class="col-md-3 col-sm-4 fh5co-tours animate-box fadeInUp animated"
                             data-animate-effect="fadeIn">
                            <div href="#"><img src="{{ asset($entertains->blog_image) }}" alt=" "
                                               style="height: 120px;width: 90%" class="img-responsive">
                                <p><a href="{{route('blog-details',['id'=>$entertains->id])}}">
                                        <h4>{{ $entertains->blog_title }}</h4></a></p>
                                <p><a><h6>{{ $entertains->blog_short_description }}</h6></a></p>

                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-3">
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-md-4 mb-4">
                                    <img src="{{asset($blog->blog_image)}}" alt="" height="50" width="75"
                                         href="{{route('blog-details',['id'=>$blog->id])}}">
                                </div>
                                <div class="col-md-7 mb-7">
                                    <a href="{{route('blog-details',['id'=>$blog->id])}}"
                                       style="color: black; font-weight: bold; text-decoration: none; font-size: 16px "><h6
                                                class=""
                                                style="text-align: left; width: 150px; display: block;"> {{ $blog->blog_title}}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

            </div>
        </div>
    </section>
    </hr>


@endsection
