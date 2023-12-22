@extends('front.layouts.app')
@section('css')

@endsection

@section('content')
    @if(str_contains(url()->current(), 'blog-detail'))
        @include('front.layouts.header')
    @endif
    <section class="blog__single__details__wrapper">
        <div class="container">
            
            <div class="blog-content-section">
                <h2>
                    {{ $blog->title }}
                </h2>
                <ul class="blog-header-details">
                    <li>
                        <p class="blog-date">{{ date('M d, Y',strtotime($blog->date)) }}</p>
                    </li>
                    {{-- <li>
                        <a href="javascript:;" class="blog-cats">Destinations</a>,
                        <a href="javascript:;" class="blog-cats">Events</a>
                    </li> --}}
                    <li>
                        {{-- <button type="button" class="btn bluebtn">Share</button> --}}
                    </li>
                </ul>
                <p>By {{ $blog->blog_by }}</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset($blog->image)}}" class="img-fluid" alt="">
                    <div class="blog-content-wrapper-inner">
                        {!! $blog->content !!}
                    </div>

                </div>
                {{-- <div class="col-md-4"> --}}
                    {{-- <div class="card customfloatingcard">
                        <img src="assets/img/blogevent.jpg" class="img-fluid card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> 10 Meeting & Event Trends for 2024 </h5>
                            <p class="card-text">Find out what's shaping the hospitality industry </p>
                            <a href="#" class="btn btn-primary">Stay Ahead of the Game</a>
                        </div>
                    </div> --}}
                {{-- </div> --}}
            </div>
            {{-- <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-end-content">
                        <h3>Featured Venues & Destinations</h3>
                        <p>Explore destinations, hotels, convention centers, and other venues to find the perfect spot
                            for meetings and events. Learn about the features and benefits they offer for planners, as
                            well as the latest news on renovations, openings, and trends.</p>
                        <a href="javascript:;">More articles from Featured Venues & Destinations</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

@endsection

@section('js')
@endsection
