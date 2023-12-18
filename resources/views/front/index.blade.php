@extends('front.layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')
@if(str_contains(url()->current(), '/'))
@include('front.layouts.header')
@endif
<section class="banner-with-search">
    <div class="container">
        <div class="filter-bar">
            <form action="{{ url('search-venue') }}" method="GET">
                @csrf
                <ul>
                    <li class="filterone">
                        <select name="venue_id" class="form-control event_filters" id="searchVenue" required>
                            <option value="">Select Venue</option>
                            @foreach ($venues as $item)
                            <option value="{{ $item->id }}">{{ $item->company }}</option>
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
            <h2>Discover More</h2>
            <p>The world's top chains, brands, and venues want your meetings! Find out what the top<br> chains and
                brands are doing to make every meeting and event a unique experience.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="discover-left-box">
                    <img src="{{ asset('front/img/i1.webp')}}" class="img-fluid" alt="">
                    <div class="abs-content-box">
                        <h3>Put your Game face on at Graduate Hotels</h3>
                        <p>With hotels and resorts throughout the US and meeting space for 10 to 1000, there is a
                            distinctive venue to match any event style and size.</p>
                        <a href="javascript:;">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-right-box">
                    <div class="custcard">
                        <div class="custcardimg">
                            <img src="{{ asset('front/img/i2.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="custcardcontent">
                            <h3>Put your Game face on at Graduate Hotels</h3>
                            <p>From strategic meetings to team-building events, we are here to help you score
                                success every time!</p>
                            <a href="javascript:;">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="discover-right-box">
                    <div class="custcard">
                        <div class="custcardimg">
                            <img src="{{ asset('front/img/i2.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="custcardcontent">
                            <h3>Put your Game face on at Graduate Hotels</h3>
                            <p>From strategic meetings to team-building events, we are here to help you score
                                success every time!</p>
                            <a href="javascript:;">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="discover-right-box">
                    <div class="custcard">
                        <div class="custcardimg">
                            <img src="{{ asset('front/img/i2.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="custcardcontent">
                            <h3>Put your Game face on at Graduate Hotels</h3>
                            <p>From strategic meetings to team-building events, we are here to help you score
                                success every time!</p>
                            <a href="javascript:;">Learn more</a>
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

            <div class="col-lg-4 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-3 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="newscard">

                    <div class="newscardimagebox">
                        <img src="{{ asset('front/img/n1.png')}}" class="img-fluid" alt="">
                        <div class="newsdate">
                            <p>Nov 21, 2023</p>
                        </div>
                    </div>

                    <div class="newsheading"><a href="javascript:;">The Galt House Hotel: Elevate Your Event</a>
                    </div>
                </div>
            </div>

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
