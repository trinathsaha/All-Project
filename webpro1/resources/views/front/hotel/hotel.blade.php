@extends('front.master')

@section('title')
    hotel list
@endsection

@section('body')
    <section style="margin-top: 40px">
        <div class="container">
            <div class="row">
                @foreach($hotels as $hotel)
                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="{{ asset($hotel->hotel_image) }}" alt=" " style="height: 300px;width: 100%" class="img-responsive">
                            <div class="desc">
                                <span></span>
                                <h3>{{ $hotel->hotel_name }}</h3>
                                <span>{{ $hotel->city_name }}</span>

                                <a class="btn btn-primary btn-outline" href="{{ route('book-now') }}">Book Now <i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @endsection