@extends('front.layouts.app')
@section('css')
<style>
      #map {
            height: 400px;
            width: 100%;
        }
</style>
@endsection

@section('content')
@if(str_contains(url()->current(), 'venue-detail/'.$venue->id))
@include('front.layouts.header3')
@endif

<div class="single-venue-fix-bottom-bar fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <a href="javascript:;" class="svfbb_link">Back to Karachi Cantt Railway Station, Doctor Daud
                    Pota Road, Karachi Cantonment Karachi venues</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-6">
                <h1 class="svfbb_heading">{{ $venue->company ?? ""}}</h1>
                <p class="svfbb_text">{{ $venue->city ?? ""}},{{ $venue->state ?? ""}} {{ $venue->zip ?? ""}}</p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <ul>
                    <li>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $venue->id }}" name="id">
                            <input type="hidden" value="{{ $venue->company }}" name="name">
                            <input type="hidden" value="{{ $venue->city }}" name="city">
                            <input type="hidden" value="{{ $venue->state }}" name="state">


                            <input type="hidden" value="{{ isset($venue["venue_images"][0]) ? asset($venue["venue_images"][0]->image ) : "" }}"  name="image">
                            <button style="background: #006ae1;color: #fff;" class="btn bluebtn">Select Venue</button>
                        </form>
                    </li>
                    <li>
                        {{-- <a href="javascript:;" class="svfbb_link_right">Learn how the BestMeetingVenues Supplier Network works</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="single-venue-gallery-sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            @if(count($venue_images) > 0)
                    {{-- @if($loop->iteration == 1) --}}
                        <div class="col-lg-8 col-sm-12">
                            <div class="gallery-wrapper">
                                <a href="{{ asset($venue_images[0]->image) }}" data-fancybox="group" data-caption="Property Image 1">
                                    <img src="{{ asset($venue_images[0]->image) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    {{-- @endif --}}
                    <div class="col-lg-4">
                        <div class="gallery-wrapper">
                            <div class="row">
                                {{-- @if($loop->iteration == 2) --}}
                                    <div class="col-lg-12 col-sm-4">
                                        <a href="{{ asset($venue_images[1]->image) }}" data-fancybox="group" data-caption="Property Image 1">
                                            <img src="{{ asset($venue_images[1]->image) }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                {{-- @else --}}
                                    <div class="col-lg-12 col-sm-4">
                                        <a href="{{ asset($venue_images[2]->image) }}" data-fancybox="group" data-caption="Property Image 1">
                                            <img src="{{ asset($venue_images[2]->image) }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                {{-- @endif  --}}
                            </div>
                        </div>
                    </div>
            @endif
        </div>
    </div>
    {{-- <a href="javascript:;" class="btn btn-view-gallery">View Gallery (2)</a> --}}
</section>

<div class="venue_details_cst_elem_wrapper_parent">
    <section class="single-venue-details-nav">
        <div class="container">
            <ul>
                <li><a href="#first-screen" data-ref="first-screen" class="naav-item active">Overview</a></li>
                <li><a href="#second-screen" data-ref="second-screen" class="naav-item">Meeting Space</a></li>
                <li><a href="#third-screen" data-ref="third-screen" class="naav-item">Guest Rooms</a></li>
                <li><a href="#fourth-screen" data-ref="fourth-screen" class="naav-item">Nearby</a></li>
                <li><a href="#fifth-screen" data-ref="fifth-screen" class="naav-item">More</a></li>
                <li><a href="#sixth-screen" data-ref="sixth-screen" class="naav-item">Faqs</a></li>
            </ul>
        </div>
    </section>

    <section id="first-screen" data-section-number="1" class="naav_wrapper_Section venue-overview">
        <div class="container">

            <div class="overview_wrapper_section">

                <div class="content">
                    <h2>Overview</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Chain</li>
                            <li>
                                <p>{{ $venue->chain ?? ""}}</p>
                            </li>
                        </ul>
                        <ul>
                            <li>Brand</li>
                            <li>
                                <p>{{ $venue->brand ?? ""}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Built</li>
                            <li>
                                <p>{{ $venue->built ?? ""}}</p>
                            </li>
                        </ul>
                        <ul>
                            <li>Renovated</li>
                            <li>
                                <p>{{ $venue->rennovated ?? ""}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Total meeting space</li>
                            <li>
                                <p>{{ $venue->total_meeting_space ?? ""}}</p>
                            </li>
                        </ul>
                        <ul>
                            <li>Guest Rooms</li>
                            <li>
                                <p>{{ $venue->guest_rooms ?? ""}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Venue type</li>
                            <li>
                                <p>{{ $venue->venue_type ?? ""}}</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content">
                    <h2>Rating</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <ul>
                            <li>Northstar</li>
                            <li>
                                <p>{{ $venue->rating ?? ""}} <i class="fa fa-star"></i> </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content">
                    <h2>Amenities</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Room features and guest services</li>
                            {!! $venue->room_features !!}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Business services</li>
                            {!! $venue->business_services !!}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Recreational activities</li>
                            {!! $venue->recreational_activities !!}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Venue accessibility</li>
                            {!! $venue->venue_accessiblity !!}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Facilities</li>
                            {!! $venue->facilities !!}
                        </ul>
                    </div>
                </div>

                <div class="content">
                    <h2>Distance from airport</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> <i class="fa fa-plane"></i> {{ $venue->distance_from_airport }} from venue</li>
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <h2>Parking</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> {{ $venue->parking ?? ""}} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="second-screen" data-section-number="2" class="naav_wrapper_Section venue-overview">
        <div class="container">

            <div class="meetingspace_wrapper_section">
                <div class="content">
                    <h2>{{ $venue->company }} Meeting Space</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total Meeting Space</li>
                            <li> {{ $venue->total_meeting_space ?? ""}}</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Largest rooms</li>
                            <li> {{ $venue->largest_room }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> {{ $venue->meeting_rooms }}</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Second Largest Room</li>
                            <li> {{ $venue->second_largest_room }}</li>
                        </ul>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>

    <section id="third-screen" data-section-number="3" class="naav_wrapper_Section venue-overview">
        <div class="container">
            <div class="guestrooms_wrapper_section">
                <div class="content">
                    <h2>Guest Rooms</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> {{ $venue->guest_rooms ?? "" }} </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Suites</li>
                            <li> {{ $venue->suites ?? "" }}</li>
                        </ul>
                    </div>
                    
                </div>

            </div>
            {{-- <div class="content">
                <h2>Photos</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    <a href="assets/img/ven1.webp" data-fancybox="group" data-caption="Property Image 1">
                        <img src="assets/img/ven1.webp" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="assets/img/ven1.webp" data-fancybox="group" data-caption="Property Image 1">
                        <img src="assets/img/ven1.webp" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="assets/img/ven1.webp" data-fancybox="group" data-caption="Property Image 1">
                        <img src="assets/img/ven1.webp" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="assets/img/ven1.webp" data-fancybox="group" data-caption="Property Image 1">
                        <img src="assets/img/ven1.webp" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
            </div> --}}
        </div>
    </section>

    <section id="fourth-screen" data-section-number="4" class="naav_wrapper_Section near__by__section">
        <div class="container">
            <div class="content">
                <h2>Nearby</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <a class="nearby__venue__name">{{ $venue->company ?? "" }}</a>
                    <img src="{{ isset($venue_images[0]->image) ? asset($venue_images[0]->image) : '' }}" class="img-fluid nearby__venue__vimage" alt="">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $venue->id }}" name="id">
                        <input type="hidden" value="{{ $venue->company }}" name="name">
                        <input type="hidden" value="{{ $venue->city }}" name="city">
                        <input type="hidden" value="{{ $venue->state }}" name="state">


                        <input type="hidden" value="{{ isset($venue["venue_images"][0]) ? asset($venue["venue_images"][0]->image ) : "" }}"  name="image">
                        <button style="background: #006ae1;color: #fff;" class="btn bluebtn">Select Venue</button>
                    </form>
                </div>
                <div class="col-md-7">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="fifth-screen" data-section-number="5" class="naav_wrapper_Section more-venue-details-sec">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-9">
                    <div class="moredetails___content">
                        <h4>More</h4>
                        {!! $venue->description !!}
                    </div>
                </div>
                <div class="col-md-3">
                    {{-- <div class="moredetails___content__right__box">
                        <h4>Contact Us</h4>
                        <a href="javascript:;" class="btn whitebtn">Signup for access</a>
                        <p>Already have an account?</p>
                        <a href="{{ url('login') }}">Login</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="sixth-screen" class="naav_wrapper_Section faqs-section">
        <div class="container">
            <div class="content">
                <h3>Frequently Asked Questions</h3>
                <p>Explore frequently asked questions from the {{ $venue->company }} regarding Health and Safety,
                    Sustainability, and Diversity and Inclusion</p>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> SUSTAINABLE PRACTICES</h4>
                    <p>Please provide comments or a link to any publicly communicated {{ $venue->company }}
                        sustainability or social impact goals/strategy.</p>
                    <div class="faq__answer">No response</div>
                    <p>Does {{ $venue->company }} have a strategy that focuses on the elimination and diversion of
                        waste
                        (i.e. plastics, papers, cardboard, etc.)? If yes, please elaborate on your strategy of
                        elimination and diversion of waste.</p>
                    <div class="faq__answer">No response</div>
                </div>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> DIVERSITY AND INCLUSION</h4>
                    <p>Please provide comments or a link to any publicly communicated {{ $venue->company }}
                        sustainability or social impact goals/strategy.</p>
                    <div class="faq__answer">No response</div>
                    <p>Does {{ $venue->company }} have a strategy that focuses on the elimination and diversion of
                        waste
                        (i.e. plastics, papers, cardboard, etc.)? If yes, please elaborate on your strategy of
                        elimination and diversion of waste.</p>
                    <div class="faq__answer">No response</div>
                </div>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> SUSTAINABLE PRACTICES</h4>
                    <p>For US hotels only, is {{ $venue->company }} and/or parent company certified as a 51% diverse
                        owned
                        business enterprise (BE)? If yes, please indicate which one of the following you are
                        certified
                        as:</p>
                    <div class="faq__answer">No response</div>
                    <p>If applicable, could you please provide a link to {{ $venue->company }} public report on their
                        commitments and initiatives related to diversity, equity, and inclusion?</p>
                    <div class="faq__answer">No response</div>
                </div>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> HEALTH AND SAFETY</h4>
                    <p>Were practices at {{ $venue->company }} developed based on health service recommendations from
                        public governmental entities or private organizations? If Yes, please list which
                        organizations
                        were used to develop these practices.</p>
                    <div class="faq__answer">No response</div>
                    <p>Does {{ $venue->company }} clean and sanitize public areas and publicly accessible facilities
                        (i.e.
                        meeting rooms, restaurants, elevator banks, etc.)? If yes, describe any new measures that
                        are
                        taken.</p>
                    <div class="faq__answer">No response</div>
                </div>
            </div>
        </div>

        {{-- <div class="container">
            <div class="faqs___footer__content">
                <p>See a problem with this venue's profile? <a href="javascript:;">Submit an issue</a></p>
            </div>
        </div> --}}
    </section>
</div>

@endsection


@section('js')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO1KMqg08gyZPAIWiIOY2hRtv2_EBuEB4&callback=initMap">
</script>

<script>
function initMap() {
    // Default location (you can replace this with dynamic lat/lng)
    var defaultLatLng = { lat: 39.9892, lng: -75.2197 };

    // Create a map centered at the default location
    var map = new google.maps.Map(document.getElementById('map'), {
        center: defaultLatLng,
        zoom: 12
    });

    // Create a marker at the default location
    var marker = new google.maps.Marker({
        position: defaultLatLng,
        map: map,
        title: 'Default Location'
    });
}
</script>

<script>
    $('[data-fancybox]').fancybox({
        // Options will go here
        buttons: [
            'close'
        ],
        wheel: false,
        transitionEffect: "slide",
        // thumbs          : false,
        // hash            : false,
        loop: true,
        // keyboard        : true,
        toolbar: false,
        // animationEffect : false,
        // arrows          : true,
        clickContent: false
    });
    $(document).on("click", ".naav-item", function () {
        $('.naav-item').removeClass('active');
        $(this).addClass('active');
    });


    // custom js

    const sections = document.querySelectorAll('.naav_wrapper_Section');
    const config = {
        rootMargin: '-50px 0px -55%'
    };

    let observer = new IntersectionObserver(function (entries, self) {
        entries.forEach(entry => {
            // console.log(entry);
            if (entry.isIntersecting) {
                intersectionHandler(entry);
            }
        });
    }, config);

    sections.forEach(section => {
        observer.observe(section);
    });

    function intersectionHandler(entry) {
        const idsss = entry.target.id;
        const currentlyActive = document.querySelector('.naav-item.active');
        const shouldBeActive = document.querySelector('[data-ref=' + idsss + ']');

        if (currentlyActive) {
            currentlyActive.classList.remove('active');
        }
        if (shouldBeActive) {
            shouldBeActive.classList.add('active');
        }
    }

</script>
@endsection
