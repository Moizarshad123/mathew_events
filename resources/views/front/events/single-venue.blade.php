@extends('front.layouts.app')
@section('css')
@endsection

@section('content')
@if(str_contains(url()->current(), 'venue-detail/'.$venue->id))
@include('front.layouts.header3')
@endif

<section class="single-venue-gallery-sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12">
                <div class="gallery-wrapper">
                    <a href="{{ asset('front/img/g2.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                        <img src="{{ asset('front/img/g2.webp')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="gallery-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-sm-4">
                            <a href="{{ asset('front/img/g2.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                                <img src="{{ asset('front/img/g2.webp')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-sm-4">
                            <a href="{{ asset('front/img/g3.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                                <img src="{{ asset('front/img/g3.webp')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-sm-4">
                            <a href="{{ asset('front/img/g4.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                                <img src="{{ asset('front/img/g4.webp')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                                <p>Independent / Other</p>
                            </li>
                        </ul>
                        <ul>
                            <li>Brand</li>
                            <li>
                                <p>Other Affiliation</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Built</li>
                            <li>
                                <p>--</p>
                            </li>
                        </ul>
                        <ul>
                            <li>Renovated</li>
                            <li>
                                <p>--</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Total meeting space</li>
                            <li>
                                <p>--</p>
                            </li>
                        </ul>
                        <ul>
                            <li>Guest Rooms</li>
                            <li>
                                <p>82</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Venue type</li>
                            <li>
                                <p>Hotel</p>
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
                                <p>3 <i class="fa fa-star"></i> </p>
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
                            <li>
                                <p>Internet access</p>
                            </li>
                            <li>
                                <p>Laundry service</p>
                            </li>
                            <li>
                                <p>Room service</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Business services</li>
                            <li>
                                <p>AV capabilities</p>
                            </li>
                            <li>
                                <p>Business center</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Recreational activities</li>
                            <li>
                                <p>Health club</p>
                            </li>
                            <li>
                                <p>Outdoor pool</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Venue accessibility</li>
                            <li>
                                <p>Airport shuttle</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li>Facilities</li>
                            <li>
                                <p>Onsite catering</p>
                            </li>
                            <li>
                                <p>Onsite restaurant</p>
                            </li>
                            <li>
                                <p>Rental car service</p>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="content">
                    <h2>Distance from airport</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> <i class="fa fa-plane"></i> 13.7 mi. from venue</li>
                        </ul>
                    </div>
                </div>

                <div class="content">
                    <h2>Parking</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Complimentary parking</li>
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
                    <h2>Beach Luxury Hotel Meeting Space</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Meeting rooms</li>
                            <li> 10</li>
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
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <ul>
                            <li> Total guest rooms</li>
                            <li> 82</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <h2>Photos</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    <a href="{{ asset('front/img/ven1.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                        <img src="{{ asset('front/img/ven1.webp')}}" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="{{ asset('front/img/ven1.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                        <img src="{{ asset('front/img/ven1.webp')}}" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="{{ asset('front/img/ven1.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                        <img src="{{ asset('front/img/ven1.webp')}}" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="{{ asset('front/img/ven1.webp')}}" data-fancybox="group" data-caption="Property Image 1">
                        <img src="{{ asset('front/img/ven1.webp')}}" class="img-fluid gallery__photos" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="fourth-screen" data-section-number="4" class="naav_wrapper_Section near__by__section">
        <div class="container">
            <div class="content">
                <h2>Nearby</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <a class="nearby__venue__name">Beach Luxury Hotel</a>
                    <img src="{{ asset('front/img/g3.webp')}}" class="img-fluid nearby__venue__vimage" alt="">
                    <a href="javascript:;" class="btn bluebtn">Select Venue</a>
                </div>
                <div class="col-md-7">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462118.02491053584!2d67.15546194999999!3d25.193202399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1701441028899!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <p>
                            Beach Luxury Hotel is ideally located adjacent to the central banking & business
                            district
                            (I.I. Chundrigar Road) and close to the port and other commercial areas. It is still the
                            only resort hotel in the port city of Karachi.
                            <br>
                            This creek side, 3-Star hotel offers a relaxed, old-charm atmosphere with 82 spacious
                            Rooms
                            (deluxe & executive) and Suites located over two wings and 24 hour room service. If you
                            are
                            looking for a venue to hold an important conference or wedding functions, we have the
                            perfect spaces for you, with state of the art, technology and a team of professionals on
                            hand to co-ordinate your event.
                            <br>
                            A venue of multiple dimensions with two banquet halls and lush green lawns that can
                            accommodate up to 1000 plus guests and multiple additional 08 meeting rooms, what better
                            place to host your important event? Whatever your preferences we have the perfect blend
                            of
                            facilities, be it business or pleasure, keeping comfort and connectivity in mind.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="moredetails___content__right__box">
                        <h4>Contact Us</h4>
                        <a href="javascript:;" class="btn whitebtn">Signup for access</a>
                        <p>Already have an account?</p>
                        <a href="javascript:;">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sixth-screen" class="naav_wrapper_Section faqs-section">
        <div class="container">
            <div class="content">
                <h3>Frequently Asked Questions</h3>
                <p>Explore frequently asked questions from the Beach Luxury Hotel regarding Health and Safety,
                    Sustainability, and Diversity and Inclusion</p>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> SUSTAINABLE PRACTICES</h4>
                    <p>Please provide comments or a link to any publicly communicated Beach Luxury Hotel's
                        sustainability or social impact goals/strategy.</p>
                    <div class="faq__answer">No response</div>
                    <p>Does Beach Luxury Hotel have a strategy that focuses on the elimination and diversion of
                        waste
                        (i.e. plastics, papers, cardboard, etc.)? If yes, please elaborate on your strategy of
                        elimination and diversion of waste.</p>
                    <div class="faq__answer">No response</div>
                </div>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> DIVERSITY AND INCLUSION</h4>
                    <p>Please provide comments or a link to any publicly communicated Beach Luxury Hotel's
                        sustainability or social impact goals/strategy.</p>
                    <div class="faq__answer">No response</div>
                    <p>Does Beach Luxury Hotel have a strategy that focuses on the elimination and diversion of
                        waste
                        (i.e. plastics, papers, cardboard, etc.)? If yes, please elaborate on your strategy of
                        elimination and diversion of waste.</p>
                    <div class="faq__answer">No response</div>
                </div>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> SUSTAINABLE PRACTICES</h4>
                    <p>For US hotels only, is Beach Luxury Hotel and/or parent company certified as a 51% diverse
                        owned
                        business enterprise (BE)? If yes, please indicate which one of the following you are
                        certified
                        as:</p>
                    <div class="faq__answer">No response</div>
                    <p>If applicable, could you please provide a link to Beach Luxury Hotel's public report on their
                        commitments and initiatives related to diversity, equity, and inclusion?</p>
                    <div class="faq__answer">No response</div>
                </div>
                <div class="faq__box__wrapper">
                    <h4 class="faq_heading_box"> <i class="fa fa-tree"></i> HEALTH AND SAFETY</h4>
                    <p>Were practices at Beach Luxury Hotel developed based on health service recommendations from
                        public governmental entities or private organizations? If Yes, please list which
                        organizations
                        were used to develop these practices.</p>
                    <div class="faq__answer">No response</div>
                    <p>Does Beach Luxury Hotel clean and sanitize public areas and publicly accessible facilities
                        (i.e.
                        meeting rooms, restaurants, elevator banks, etc.)? If yes, describe any new measures that
                        are
                        taken.</p>
                    <div class="faq__answer">No response</div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="faqs___footer__content">
                <p>See a problem with this venue's profile? <a href="javascript:;">Submit an issue</a></p>
            </div>
        </div>
    </section>
</div>

@endsection


@section('js')
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
