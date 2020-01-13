@extends('front.master')

@section('body')
    <h1 class="text-center text-success">{{Session::get('message')}}</h1>
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$blog->blog_title}} </h1>

        <ol class="breadcrumb">

            <li class="breadcrumb-item active">{{$blog->blog_short_description}}</li>
        </ol>
        <div class="col-md-3">
        @foreach($reporter as $reporters)
            <div class="row">
                <div class="col-md-2 mb-2">

                    <p>
                        <img src="{{asset($reporters->image)}}" alt="" style="height: 40px; width: 30px">
                    </p>
                </div>
                <div class="col-md-10 mb-10">
                    <h6>{{$reporters->name}}</h6>

                    <p>{{$reporters->updated_at}}</p>

                    <p>
                    </p>
                </div>
            </div>
        @endforeach
        </div>
        <section>
            <div class="row">

                <!-- Post Content Column -->
                <div class="col-md-8 mb-8">

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{asset($blog->blog_image)}}" alt="">

                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on :{{$blog->created_at}}</p>

                    <hr>


                    <blockquote class="blockquote">

                        <footer class="blockquote-footer">
                            <cite title="Source Title"
                                  style="text-align: justify">{!! $blog->blog_long_description !!}</cite>
                        </footer>
                    </blockquote>

                    <hr>

                    <!-- Comments Form -->
                    <div class="card my-4">
                        <h5 class="card-header">মন্তব্য করতে <a href="{{route('visitor-login')}}"> লগইন </a> অথবা <a
                                    href="{{route('sign-up')}}">নিবন্ধন</a> করুন ‍</h5>
                        @if(Session::get('visitorId'))
                            <div class="card-body">
                                <form action="{{route('new-comment')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="visitor_id" value="{{Session::get('visitorId')}}">
                                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                        <textarea class="form-control" rows="3" name="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                    </div>
                    <br>
                @endif

                    <!-- Single Comment -->
                    @foreach($comments as $comment)
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">{{$comment->first_name. ' '.$comment->last_name}}</h5>
                                {{$comment->comment}}
                            </div>
                        </div>
                    @endforeach
                <!-- Comment with nested comments -->
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                            <div class="media mt-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.
                                </div>
                            </div>

                            <div class="media mt-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <!-- Sidebar Widgets Column -->
                <div class="col-md-4 mb-4">


                        @foreach($news as $news)
                        <div class="row" style="border-style: none">

                            <div class="col-md-6 mb-6">
                                <img class="" src="{{asset($news->blog_image)}}" alt="" height="60" width="80">
                            </div>

                            <div class="col-md-6 mb-6">
                                <a href="#"><h6 class="text-success" style="text-align: left"> {{ $news->blog_title}}</h6></a>
                            </div>

                        </div>
                        @endforeach

                </div>
            </div>
        </section>

    </div>
@endsection
