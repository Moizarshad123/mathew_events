@extends('front.layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')
@if(str_contains(url()->current(), '/'))
@include('front.layouts.header')
@endif
<section class="banner-with-search" style="background: {{ asset($cms->banner_image) }} !important;">
    <div class="container">
        <div class="filter-bar">
            <form action="{{ url('search-venue') }}" method="GET">
                {{-- @csrf --}}
                <ul>
                    <li class="filterone">
                        <select name="city" class="form-control event_filters" id="searchVenue" required>
                            <option value="">Select City</option>
                            @foreach ($cities as $item)
                            <option value="{{ $item->city }}">{{ $item->city }}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="filtertwo">
                        <input type="date" name="start_date" class="form-control startdate_filters"
                            placeholder="Start Date" />
                        <span>Start Date (Optional)</span>
                    </li>
                    <li class="filterthree">
                        <input type="date" name="end_date" class="form-control enddate_filters"
                            placeholder="End Date" />
                        <span>End Date (Optional)</span>
                    </li>
                    <li class="filterfour">
                        <div class="dropdown">
                            <a onclick="myFunction()" href="javascript:;" class="dropbtn">Event Size <i
                                    class="fa fa-angle-down"></i></a>
                            <div id="myDropdown" class="dropdown-content">
                                <div class="conboxcstelm">
                                    <ul>
                                        <li>attendees per day <input type="text" placeholder="100"
                                                name="attendees_per_day"></li>
                                        <hr>
                                        <li>Guest rooms per night <input type="text" placeholder="100"
                                                name="guest_rooms"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span>Optional</span>
                    </li>
                    <li class="filterfive">
                        <button class="btn search-btn" type="submit">Find venue</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    {{-- <div class="banner-bottom-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="banner-bottom-content">
                        <p>BREAKOUT Meetings at Hard Rock: Expect the Unexpected! </p>
                        <p>Every success story can trace its way back to an experience. One that changed those bold
                            enough to be a part of it. These are our BREAKOUT moments. So when you are ready to take
                            care of business, we're ready to make it happen. This is Hard Rock and this is an event
                            performance like no other. </p>
                        <a href="javascript:;">Show More</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="banner-bottom-content">
                        <a href="javascript:;" class="btn bluebtn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>

<section class="discover-section">
    <div class="container">
        <div class="content_section">
            <h2>{{ $cms->section_one_heading }}</h2>
            {!! $cms->section_one_content !!}
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="discover-left-box">
                    <img src="{{ asset($cms->section_two_image)}}" class="img-fluid" alt="">
                    <div class="abs-content-box">
                        <h3>{{ $cms->section_two_heading }}</h3>
                        {!! $cms->section_two_content !!}
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-right-box">
                    <div class="custcard">
                        <div class="custcardimg">
                            <img src="{{ asset($cms->blog_one_image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="custcardcontent">
                            <h3>{{ $cms->blog_one_heading }}</h3>
                            {!! $cms->blog_one_content !!}
                            {{-- <a href="javascript:;">Learn more</a> --}}
                        </div>
                    </div>
                </div>
                <div class="discover-right-box">
                    <div class="custcard">
                        <div class="custcardimg">
                            <img src="{{ asset($cms->blog_two_image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="custcardcontent">
                            <h3>{{ $cms->blog_two_heading }}</h3>
                            {!! $cms->blog_two_content !!}
                            {{-- <a href="javascript:;">Learn more</a> --}}
                        </div>
                    </div>
                </div>
                <div class="discover-right-box">
                    <div class="custcard">
                        <div class="custcardimg">
                            <img src="{{ asset($cms->blog_three_image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="custcardcontent">
                            <h3>{{ $cms->blog_three_heading }}</h3>
                            {!! $cms->blog_three_content !!}
                            {{-- <a href="javascript:;">Learn more</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whats-new-section">
    <div class="container">
        <div class="content_section">
            <h2>What's New</h2>
        </div>
        <div class="row">
            @forelse ($top3 as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="newscard">

                        <div class="newscardimagebox">
                            <img src="{{ asset($item->image)}}" class="img-fluid" alt="">
                            <div class="newsdate">
                                <p>{{ date('M, d Y',strtotime($item->date)) }}</p>
                            </div>
                        </div>

                        <div class="newsheading"><a href="{{ url('blog-detail/'.$item->id) }}">{{ $item->title }}</a>
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse

        </div>
        <div class="row">

            @forelse ($blogs as $item)

                <div class="col-lg-3 col-sm-6">
                    <div class="newscard">

                        <div class="newscardimagebox">
                            <img src="{{ asset($item->image)}}" class="img-fluid" alt="">
                            <div class="newsdate">
                                <p>{{ date('M, d Y',strtotime($item->date)) }}</p>
                            </div>
                        </div>

                        <div class="newsheading"><a href="{{ url('blog-detail/'.$item->id) }}">{{ $item->title }}</a>
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>

        <div class="show-more-bbtn">
            <a href="javascript:;" class="showmoreblueoutlinebtn">Show More</a>
        </div>
    </div>
</section>

<section class="browse-events-section">
    <div class="container">
        <div class="content_section">
            <h2>Browse Event and Meeting Venues By Location</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <ul>
                    <li>Event & Meeting Venues in New York</li>
                    <li>Event & Meeting Venues in Chicago</li>
                    <li>Event & Meeting Venues in Washington D.C.</li>
                    <li>Event & Meeting Venues in Dallas Fort Worth</li>
                    <li>Event & Meeting Venues in Greater London</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>Event & Meeting Venues in Phoenix / Scottsdale</li>
                    <li>Event & Meeting Venues in Orlando</li>
                    <li>Event & Meeting Venues in Los Angeles</li>
                    <li>Event & Meeting Venues in Atlanta</li>
                    <li>Event & Meeting Venues in Nashville</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>Event & Meeting Venues in San Diego</li>
                    <li>Event & Meeting Venues in Denver</li>
                    <li>Event & Meeting Venues in Boston</li>
                    <li>Event & Meeting Venues in Miami</li>
                    <li>Event & Meeting Venues in Las Vegas</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>Event & Meeting Venues in San Francisco</li>
                    <li>Event & Meeting Venues in Austin</li>
                    <li>Event & Meeting Venues in Greater Paris</li>
                    <li>Event & Meeting Venues in Tampa / Clearwater</li>
                    <li>Event & Meeting Venues in Netherlands</li>
                </ul>
            </div>
        </div>
        <div class="show-more-bbtn">
            <a href="javascript:;" class="showmoreblueoutlinebtn">Show More</a>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    var $disabledResults = $(".event_filters");
    $disabledResults.select2();

    

</script>
@endsection
