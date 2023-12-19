@extends('front.layouts.app')
@section('css')
@endsection

@section('content')
@if(str_contains(url()->current(), 'search-venue'))
    @include('front.layouts.header2')
@endif


<section class="results-page-main-section">
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-lg-3 col-md-3 p-0">
                <div class="left-side-bar">
                    <div class="left-side-bar-inner">
                        <p class="address">
                            21 Meeting & Event Venues in Karachi Cantt Railway Station, Doctor Daud Pota Road,
                            Karachi Cantonment Karachi
                        </p>
                        <div class="map-box">
                            <img src="{{ asset('front/img/map-placeholder__1MRk3.png')}}" class="img-fluid" alt="">
                            <a href="javascript:;" class="btn bluebtn">View map</a>
                        </div>

                        <!-- radius accordion -->
                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_one">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm1"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm1">
                                        Maximum Radius
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm1" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_one">
                                    <div class="accordion-body">
                                        <h4>Maximum Radius</h4>
                                        <label>
                                            <input type="text" class="form-control"> <span
                                                class="unti_CHSYB13_w324">mi.</span>
                                        </label>
                                        <a href="javascript:;" class="btn bluebtn">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- radius accordion -->


                        <!-- reset all filters -->
                        <div class="resetfiltests_cstelms_wrapper">
                            <a href="javascript:;" class="restallfilters_cst_elms">Reset all filters</a>
                        </div>
                        <!-- reset all filters -->


                        <!-- event dates -->
                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_two">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm2"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm2">
                                        Event dates
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm2" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_two">
                                    <div class="accordion-body">
                                        <ul class="filters__start__date__end__date">
                                            <li>
                                                <input type="text" class="form-control" placeholder="Start Date">
                                            </li>
                                            <li>-</li>
                                            <li>
                                                <input type="text" class="form-control" placeholder="End Date">
                                            </li>
                                        </ul>

                                        <h4>Promotions or need dates</h4>
                                        <ul class="Promotionsorneeddates_wrapper">
                                            <li class="first">
                                                <h4>Return venues with</h4>
                                            </li>
                                            <li class="second">
                                                <p>Select</p>
                                            </li>
                                            <li class="second"><a href="javascript:;">All</a></li>
                                            <li class="second"><a href="javascript:;">None</a></li>
                                        </ul>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="FGTRVB353">
                                            <label class="form-check-label" for="FGTRVB353">
                                                Promotions
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="KIYSN937">
                                            <label class="form-check-label" for="KIYSN937">
                                                Need dates
                                            </label>
                                        </div>
                                        <a href="javascript:;" class="btn bluebtn">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- event dates -->

                        <!-- venue types -->
                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_three">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm3"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm3">
                                        Venue Types
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm3" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_three">
                                    <div class="accordion-body">
                                        <ul class="Promotionsorneeddates_wrapper">
                                            <li class="first">
                                                <h4>Venue types</h4>
                                            </li>
                                            <li class="second">
                                                <p>Select</p>
                                            </li>
                                            <li class="second"><a href="javascript:;">All</a></li>
                                            <li class="second"><a href="javascript:;">None</a></li>
                                        </ul>


                                        <div class="accordion" id="accordion_cstelem_four">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingcollapsethee_one">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsethee_one"
                                                        aria-expanded="false" aria-controls="collapsethee_one">
                                                        Hotels
                                                    </button>
                                                </h2>
                                                <div id="collapsethee_one" class="accordion-collapse collapse"
                                                    aria-labelledby="headingcollapsethee_one"
                                                    data-bs-parent="#accordion_cstelem_four">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FGBGWTB873">
                                                            <label class="form-check-label" for="FGBGWTB873">
                                                                Boutique hotels
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBGWTR873">
                                                            <label class="form-check-label" for="FHBGWTR873">
                                                                Conference centers
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBGWTR555">
                                                            <label class="form-check-label" for="FHBGWTR555">
                                                                Exposition centers
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBGWER555">
                                                            <label class="form-check-label" for="FHBGWER555">
                                                                Hotels
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBBUMR555">
                                                            <label class="form-check-label" for="FHBBUMR555">
                                                                Luxury hotels
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBBGMR555">
                                                            <label class="form-check-label" for="FHBBGMR555">
                                                                Resorts
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingcollapsethee_two">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsethee_two"
                                                        aria-expanded="false" aria-controls="collapsethee_two">
                                                        Special Event Venues
                                                    </button>
                                                </h2>
                                                <div id="collapsethee_two" class="accordion-collapse collapse"
                                                    aria-labelledby="headingcollapsethee_two"
                                                    data-bs-parent="#accordion_cstelem_four">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FGBGGBV873">
                                                            <label class="form-check-label" for="FGBGGBV873">
                                                                Aquariums or zoos
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FGBGGBV871">
                                                            <label class="form-check-label" for="FGBGGBV871">
                                                                Arenas or stadiums
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FGBGGBV752">
                                                            <label class="form-check-label" for="FGBGGBV752">
                                                                Banquet facilities
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBGVFE555">
                                                            <label class="form-check-label" for="FHBGVFE555">
                                                                Bars or clubs
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHBYSTSJ82">
                                                            <label class="form-check-label" for="FHBYSTSJ82">
                                                                Corporate offices
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="UJSAB655">
                                                            <label class="form-check-label" for="UJSAB655">
                                                                Educational facilities
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="UJSA758S">
                                                            <label class="form-check-label" for="UJSA758S">
                                                                Entertainment venues
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="F558MRVVV">
                                                            <label class="form-check-label" for="F558MRVVV">
                                                                Galleries or museums
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FRDBGMR555">
                                                            <label class="form-check-label" for="FRDBGMR555">
                                                                Golf courses
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FHYHSTS555">
                                                            <label class="form-check-label" for="FHYHSTS555">
                                                                Movie theaters
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="LOIKUJR555">
                                                            <label class="form-check-label" for="LOIKUJR555">
                                                                Special event venues
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="IKUASDG32">
                                            <label class="form-check-label" for="IKUASDG32">
                                                Convention centers
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="LOPPO00IK">
                                            <label class="form-check-label" for="LOPPO00IK">
                                                CVBs
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="LOIK753582">
                                            <label class="form-check-label" for="LOIK753582">
                                                DMCs
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="LOIFRDEDE">
                                            <label class="form-check-label" for="LOIFRDEDE">
                                                Restaurants
                                            </label>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- venue types -->


                        <!-- Chains, brands, venues, or affiliates -->
                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_four">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm4"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm4">
                                        Chains, brands, venues, or affiliates
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm4" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_four">
                                    <div class="accordion-body">
                                        <input type="text"
                                            placeholder="Don’t see a chain, brand, venue, or affiliate? Enter its name."
                                            class="form-control">
                                        <div class="chainbox-wrapper">
                                            <h6>CHAINS AND AFFILIATES IN THIS AREA</h6>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOIFRDEDE">
                                                <label class="form-check-label" for="LOIFRDEDE">
                                                    Accor
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOIFRDEDE">
                                                <label class="form-check-label" for="LOIFRDEDE">
                                                    Independent / Other
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOIFRDEDE">
                                                <label class="form-check-label" for="LOIFRDEDE">
                                                    Marriott International Hotels
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOIFRDEDE">
                                                <label class="form-check-label" for="LOIFRDEDE">
                                                    Wyndham Hotels & Resorts
                                                </label>
                                            </div>

                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chains, brands, venues, or affiliates -->


                        <!-- Chains, brands, venues, or affiliates -->
                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_five">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm5"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm4">
                                        Cities
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm5" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_five">
                                    <div class="accordion-body">
                                        <input type="text" placeholder="Don’t see a city? Enter its name."
                                            class="form-control">
                                        <div class="chainbox-wrapper">
                                            <h6>CITIES</h6>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOIFGTFRE">
                                                <label class="form-check-label" for="LOIFGTFRE">
                                                    Karachi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOI746DE">
                                                <label class="form-check-label" for="LOI746DE">
                                                    Lahore
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="LOIFXCVDE">
                                                <label class="form-check-label" for="LOIFXCVDE">
                                                    Islamabad
                                                </label>
                                            </div>

                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chains, brands, venues, or affiliates -->
                        <hr>

                        <!-- rating filter -->
                        <div class="ratingfilter_wrapper">
                            <div class="filter-rating-box">
                                <h4>Rating</h4>
                                <div class="selector cstemlfilterrangeslider">
                                    <div class="slider-box">
                                        <input type="text" id="ratingRange" readonly>
                                        <div id="rating-range" class="slider"></div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="LOIFFRDE">
                                    <label class="form-check-label" for="LOIFFRDE">
                                        Include unrated venues
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- rating filter -->

                        <hr>

                        <!-- capabilities -->
                        <div class="venuecapabilities_wrapper">
                            <div class="venue-capabilities-box">
                                <p>Venue capabilities</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="L987UJDE">
                                    <label class="form-check-label" for="L987UJDE">
                                        Only Instant Book enabled venues
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="LOSWAQRDE">
                                    <label class="form-check-label" for="LOSWAQRDE">
                                        Only Passkey enabled venues
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="LOIKIUY21">
                                    <label class="form-check-label" for="LOIKIUY21">
                                        Floor plans available
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="POIU9FRDE">
                                    <label class="form-check-label" for="POIU9FRDE">
                                        Venues with outdoor meeting space
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="P0O9FRDE">
                                    <label class="form-check-label" for="P0O9FRDE">
                                        Safety information available
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- capabilities -->

                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_six">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm6"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm4">
                                        Guest rooms
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm6" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_six">
                                    <div class="accordion-body">
                                        <div class="guestrooms_wrapper">
                                            <div class="guest-rooms-box">
                                                <div class="selector cstemlfilterrangeslider">
                                                    <div class="slider-box">
                                                        <input type="text" id="guestroomRange" readonly>
                                                        <div id="guestroom-range" class="slider"></div>
                                                        <ul class="minmax___input___list">
                                                            <li><input type="text" id="guestroom-range-min"
                                                                    placeholder="min" class="form-control"> Sq.ft
                                                            </li>
                                                            <li><input type="text" id="guestroom-range-max"
                                                                    placeholder="max" class="form-control"> Sq.ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_seven">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm7"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm7">
                                        Largest Room
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm7" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_seven">
                                    <div class="accordion-body">
                                        <div class="largestroom_wrapper">
                                            <div class="guest-rooms-box">
                                                <div class="selector cstemlfilterrangeslider">
                                                    <div class="slider-box">
                                                        <input type="text" id="largestroomRange" readonly>
                                                        <div id="largestroom-range" class="slider"></div>
                                                        <ul class="minmax___input___list">
                                                            <li><input type="text" id="largestroom-range-min"
                                                                    placeholder="min" class="form-control"> Sq.ft
                                                            </li>
                                                            <li><input type="text" id="largestroom-range-max"
                                                                    placeholder="max" class="form-control"> Sq.ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="capactity_calculator_box">
                            <a href="javascript:;" class="capclaculator" data-bs-toggle="modal"
                                data-bs-target="#capacity__calculator__modal"><i class="fa fa-calculator"></i>
                                Capacity
                                Calculator</a>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_eight">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm8"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm8">
                                        Second Largest Room
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm8" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_eight">
                                    <div class="accordion-body">
                                        <div class="largestroom_wrapper">
                                            <div class="guest-rooms-box">
                                                <div class="selector cstemlfilterrangeslider">
                                                    <div class="slider-box">
                                                        <input type="text" id="secondlargestroomRange" readonly>
                                                        <div id="secondlargestroom-range" class="slider"></div>
                                                        <ul class="minmax___input___list">
                                                            <li><input type="text" id="secondlargestroom-range-min"
                                                                    placeholder="min" class="form-control"> Sq.ft
                                                            </li>
                                                            <li><input type="text" id="secondlargestroom-range-max"
                                                                    placeholder="max" class="form-control"> Sq.ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_nine">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm9"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm9">
                                        Total meeting space
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm9" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_nine">
                                    <div class="accordion-body">
                                        <div class="largestroom_wrapper">
                                            <div class="guest-rooms-box">
                                                <div class="selector cstemlfilterrangeslider">
                                                    <div class="slider-box">
                                                        <input type="text" id="totalmeetingspaceRange" readonly>
                                                        <div id="totalmeetingspace-range" class="slider"></div>
                                                        <ul class="minmax___input___list">
                                                            <li><input type="text" id="totalmeetingspace-range-min"
                                                                    placeholder="min" class="form-control"> Sq.ft
                                                            </li>
                                                            <li><input type="text" id="secondlargestroom-range-max"
                                                                    placeholder="max" class="form-control"> Sq.ft
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_nineju">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm9j"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm9j">
                                        Meeting Rooms
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm9j" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_nineju">
                                    <div class="accordion-body">
                                        <div class="largestroom_wrapper">
                                            <div class="guest-rooms-box">
                                                <div class="selector cstemlfilterrangeslider">
                                                    <div class="slider-box">
                                                        <input type="text" id="meetingroomsRange" readonly>
                                                        <div id="meetingrooms-range" class="slider"></div>
                                                        <ul class="minmax___input___list">
                                                            <li><input type="text" id="meetingrooms-range-min"
                                                                    placeholder="min" class="form-control"></li>
                                                            <li><input type="text" id="meetingrooms-range-max"
                                                                    placeholder="max" class="form-control"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_ten">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm10"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm10">
                                        Ceiling height
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm10" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_ten">
                                    <div class="accordion-body">
                                        <div class="largestroom_wrapper">
                                            <div class="guest-rooms-box">
                                                <div class="selector cstemlfilterrangeslider">
                                                    <div class="slider-box">
                                                        <input type="text" id="ceilingheightRange" readonly>
                                                        <div id="ceilingheight-range" class="slider"></div>
                                                        <ul class="minmax___input___list">
                                                            <li><input type="text" id="ceilingheight-range-min"
                                                                    placeholder="min" class="form-control"> .ft</li>
                                                            <li><input type="text" id="ceilingheight-range-max"
                                                                    placeholder="max" class="form-control"> .ft</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="cancelandapplybtns">
                                            <li><a href="javascript:;" class="btn">Cancel</a></li>
                                            <li><a href="javascript:;" class="btn bluebtn">Apply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_eleven">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm11"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm11">
                                        Amenities
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm11" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_eleven">
                                    <div class="accordion-body">
                                        <ul class="Promotionsorneeddates_wrapper">
                                            <li class="first">
                                                <h4>Amenities</h4>
                                            </li>
                                            <li class="second">
                                                <p>Select</p>
                                            </li>
                                            <li class="second"><a href="javascript:;">All</a></li>
                                            <li class="second"><a href="javascript:;">None</a></li>
                                        </ul>

                                        <div class="accordion" id="accordINSAYS32">

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_1" aria-expanded="false"
                                                        aria-controls="accord_one_point_1">
                                                        Room features and guest services
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_1" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingOne"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="78558FRDE">
                                                            <label class="form-check-label" for="78558FRDE">
                                                                Calls (local)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="PVVGGDE">
                                                            <label class="form-check-label" for="PVVGGDE">
                                                                Calls (toll-free)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="785GW3SDE">
                                                            <label class="form-check-label" for="785GW3SDE">
                                                                Concierge services
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="785G78548">
                                                            <label class="form-check-label" for="785G78548">
                                                                Internet access
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="78FFF548">
                                                            <label class="form-check-label" for="78FFF548">
                                                                Laundry service
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="78F77777">
                                                            <label class="form-check-label" for="78F77777">
                                                                Luggage storage
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="78KIUJSG7">
                                                            <label class="form-check-label" for="78KIUJSG7">
                                                                Room service
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="88552JSG7">
                                                            <label class="form-check-label" for="88552JSG7">
                                                                View (garden)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="HHHH2JSG7">
                                                            <label class="form-check-label" for="HHHH2JSG7">
                                                                View (mountain)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="HHJNYUSG7">
                                                            <label class="form-check-label" for="HHJNYUSG7">
                                                                View (ocean or water)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="HHJN99881">
                                                            <label class="form-check-label" for="HHJN99881">
                                                                View (urban)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="MKLO99881">
                                                            <label class="form-check-label" for="MKLO99881">
                                                                Voicemail box
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingtwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_2" aria-expanded="false"
                                                        aria-controls="accord_one_point_2">
                                                        Facilities
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_2" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingtwo"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="MKL563681">
                                                            <label class="form-check-label" for="MKL563681">
                                                                Onsite restaurant
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="MKL563V81">
                                                            <label class="form-check-label" for="MKL563V81">
                                                                All inclusive
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="8KL563V81">
                                                            <label class="form-check-label" for="8KL563V81">
                                                                Casino
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="8KL563V810">
                                                            <label class="form-check-label" for="8KL563V810">
                                                                Extended stay
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="8KL563B810">
                                                            <label class="form-check-label" for="8KL563B810">
                                                                Free airport shuttle
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="OLI563B810">
                                                            <label class="form-check-label" for="OLI563B810">
                                                                Onsite catering
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="OLI56DB810">
                                                            <label class="form-check-label" for="OLI56DB810">
                                                                Onsite gift shop
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="OLI56DB8JH">
                                                            <label class="form-check-label" for="OLI56DB8JH">
                                                                Onsite security
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="OLI999B8JH">
                                                            <label class="form-check-label" for="OLI999B8JH">
                                                                Outside caterers allowed
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="OLIGGFF8JH">
                                                            <label class="form-check-label" for="OLIGGFF8JH">
                                                                Pet friendly
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="789GFF8JH">
                                                            <label class="form-check-label" for="789GFF8JH">
                                                                Rental car service
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="789ZZA8JH">
                                                            <label class="form-check-label" for="789ZZA8JH">
                                                                Space (outdoor)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="78SZZA8JH">
                                                            <label class="form-check-label" for="78SZZA8JH">
                                                                Space (private)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZZA8JH">
                                                            <label class="form-check-label" for="98SZZA8JH">
                                                                Space (semi-private)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZZ666H">
                                                            <label class="form-check-label" for="98SZZ666H">
                                                                Sustainable practices
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRRR">
                                                            <label class="form-check-label" for="98SZRRRR">
                                                                Wheelchair accessible
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingthree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_3" aria-expanded="false"
                                                        aria-controls="accord_one_point_3">
                                                        Parking
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_3" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingthree"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR1">
                                                            <label class="form-check-label" for="98SZRRR1">
                                                                Street parking
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR2">
                                                            <label class="form-check-label" for="98SZRRR2">
                                                                Bus parking
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR3">
                                                            <label class="form-check-label" for="98SZRRR3">
                                                                Complimentary parking
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR4">
                                                            <label class="form-check-label" for="98SZRRR4">
                                                                Paid parking
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR5">
                                                            <label class="form-check-label" for="98SZRRR5">
                                                                Valet parking
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingfour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_4" aria-expanded="false"
                                                        aria-controls="accord_one_point_4">
                                                        Business services
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_4" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingfour"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR6">
                                                            <label class="form-check-label" for="98SZRRR6">
                                                                Business center
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR7">
                                                            <label class="form-check-label" for="98SZRRR7">
                                                                AV capabilities
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR8">
                                                            <label class="form-check-label" for="98SZRRR8">
                                                                Video conference
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRRR9">
                                                            <label class="form-check-label" for="98SZRRR9">
                                                                VIP services
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingfive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_5" aria-expanded="false"
                                                        aria-controls="accord_one_point_5">
                                                        AV capabilities
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_5" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingfive"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZR77G">
                                                            <label class="form-check-label" for="98SZR77G">
                                                                High speed internet
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="98SZRR10">
                                                            <label class="form-check-label" for="98SZRR10">
                                                                AV equipment
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SZRRR9">
                                                            <label class="form-check-label" for="18SZRRR9">
                                                                Onsite AV staff
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingsix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_6" aria-expanded="false"
                                                        aria-controls="accord_one_point_6">
                                                        Recreational activities
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_6" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingsix"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SBNNR9">
                                                            <label class="form-check-label" for="18SBNNR9">
                                                                Outdoor pool
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="123ZRRR9">
                                                            <label class="form-check-label" for="123ZRRR9">
                                                                Golf course on grounds
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18558RR9">
                                                            <label class="form-check-label" for="18558RR9">
                                                                Health club
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SZRLLO">
                                                            <label class="form-check-label" for="18SZRLLO">
                                                                Indoor pool
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18TTTRR9">
                                                            <label class="form-check-label" for="18TTTRR9">
                                                                Skiing
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="1EED2RR9">
                                                            <label class="form-check-label" for="1EED2RR9">
                                                                Spa or salon
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="1849GFR9">
                                                            <label class="form-check-label" for="1849GFR9">
                                                                Tennis courts
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="136SEFR9">
                                                            <label class="form-check-label" for="136SEFR9">
                                                                Water sports
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18745RR9">
                                                            <label class="form-check-label" for="18745RR9">
                                                                Whirlpool
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingseven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_7" aria-expanded="false"
                                                        aria-controls="accord_one_point_7">
                                                        Venue accessibility
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_7" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingseven"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SVVVVV">
                                                            <label class="form-check-label" for="18SVVVVV">
                                                                Train
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="FFWWWRR9">
                                                            <label class="form-check-label" for="FFWWWRR9">
                                                                Airport shuttle
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="VFBG888">
                                                            <label class="form-check-label" for="VFBG888">
                                                                Bus
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SZRLQO">
                                                            <label class="form-check-label" for="18SZRLQO">
                                                                Subway
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18T555AEO">
                                                            <label class="form-check-label" for="18T555AEO">
                                                                Taxi
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accord_one_point_1headingeight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accord_one_point_8" aria-expanded="false"
                                                        aria-controls="accord_one_point_8">
                                                        Equipment
                                                    </button>
                                                </h2>
                                                <div id="accord_one_point_8" class="accordion-collapse collapse"
                                                    aria-labelledby="accord_one_point_1headingeight"
                                                    data-bs-parent="#accordINSAYS32">
                                                    <div class="accordion-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SKIBTW6">
                                                            <label class="form-check-label" for="18SKIBTW6">
                                                                Portable walls
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="F7369GFR9">
                                                            <label class="form-check-label" for="F7369GFR9">
                                                                Dance floor
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="VXDFBG822">
                                                            <label class="form-check-label" for="VXDFBG822">
                                                                Loading dock
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18SZRLQT">
                                                            <label class="form-check-label" for="18SZRLQT">
                                                                Piano
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18T5VFRTG">
                                                            <label class="form-check-label" for="18T5VFRTG">
                                                                Portable heaters
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="18T5CVZRS">
                                                            <label class="form-check-label" for="18T5CVZRS">
                                                                Staging area
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_twelve">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm12"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm12">
                                        Areas
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm12" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_twelve">
                                    <div class="accordion-body">
                                        <ul class="Promotionsorneeddates_wrapper">
                                            <li class="first">
                                                <h4>Areas</h4>
                                            </li>
                                            <li class="second">
                                                <p>Select</p>
                                            </li>
                                            <li class="second"><a href="javascript:;">All</a></li>
                                            <li class="second"><a href="javascript:;">None</a></li>
                                        </ul>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PVVGGDEPPOO">
                                            <label class="form-check-label" for="PVVGGDEPPOO">
                                                Airport
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PVVGGDEFCDE">
                                            <label class="form-check-label" for="PVVGGDEFCDE">
                                                Interstate
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PVVGG8975DE">
                                            <label class="form-check-label" for="PVVGG8975DE">
                                                Resort
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PVVGG852FAS">
                                            <label class="form-check-label" for="PVVGG852FAS">
                                                Small metro or town
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PVXS4R52FAS">
                                            <label class="form-check-label" for="PVXS4R52FAS">
                                                Suburban
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="PVXLLIIK2FAS">
                                            <label class="form-check-label" for="PVXLLIIK2FAS">
                                                Urban
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion accordion_cstelem_oneclss" id="accordion_cstelem_thirteen">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne_cstelm13"
                                        aria-expanded="false" aria-controls="collapseOne_cstelm13">
                                        Distance From Airport
                                    </button>
                                </h2>
                                <div id="collapseOne_cstelm13" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion_cstelem_thirteen">
                                    <div class="accordion-body">
                                        <label>
                                            Venues within
                                            <input type="text" class="form-control" placeholder="Enter mi."> <span
                                                class="unti_CHSYB13_w324">mi.</span>
                                        </label>

                                        <a href="javascript:;" class="btn bluebtn">Apply</a>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 p-0">
                <div class="center-bar">
                    <div class="venues-cards-wrapper">
                        <div class="venues_card">
                            @foreach ($venues as $venue)
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="card-img-box">
                                        
                                            <img src="{{ isset($venue["venue_images"][0]) ? asset($venue["venue_images"][0]->image ) : "" }}" class="img-fluid" alt="">
                                            <ul class="image-front-btn">
                                                {{-- <li><a href="javascript:;" class="btn whitebtn" data-bs-toggle="modal" data-bs-target="#quickviewmodal">Quick View</a></li> --}}
                                                <li>
                                                    <a href="javascript:;" data-image="{{ isset($venue["venue_images"][0]) ? asset($venue["venue_images"][0]->image ) : "" }}" data-company='{{$venue->company}}' data-city='{{$venue->city}}' data-guest_rooms={{$venue->total_guest_rooms}} data-rating="{{ $venue->rating}}" data-meeting_rooms="{{ $venue->meeting_rooms}}" data-meeting_space="{{ $venue->total_meeting_space}}" data-largest_room="{{ $venue->largest_room}}" data-chain="{{ $venue->chain}}" data-brand="{{ $venue->brand }}" data-built="{{ $venue->built}}" data-distance_from_airport="{{ $venue->distance_from_airport }}" data-description="{{ $venue->description }}" data-facilities="{{ $venue->facilities}}" data-id="{{ $venue->id }}" data-venue_detail_url="{{ url('venue-detail/'.$venue->id) }}" class="btn whitebtn" id="quickView">Quick View</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $venue->id }}" name="id">
                                                        <input type="hidden" value="{{ $venue->company }}" name="name">
                                                        <input type="hidden" value="{{ $venue->city }}" name="">

                                                        <input type="hidden" value="{{ isset($venue["venue_images"][0]) ? asset($venue["venue_images"][0]->image ) : "" }}"  name="image">
                                                        <button class="btn bluebtn">Select Venue</button>
                                                    </form>
                                                    {{--                                                     
                                                    <a href="javascript:;" id="selectVenue" data-id="{{ $venue->id }}" data-venue_detail_url="{{ url('venue-detail/'.$venue->id) }}" class="btn bluebtn">Select Venue</a> --}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div class="card-content-box">
                                            <a href="{{ url('venue-detail/'.$venue->id) }}">{{ $venue->company }}</a>
                                            <ul class="card-content-box-list">
                                                <li>
                                                    <ul class="card-content-box-list-item-left">
                                                        <li>
                                                            <p>Hotel In {{ $venue->city ?? "" }}</p>
                                                        </li>
                                                        <li>
                                                            <p class="greytext__cstelm0187">Guest rooms: {{ $venue->total_guest_rooms ?? "0" }}</p>
                                                        </li>
                                                        <li>
                                                            <p class="greytext__cstelm0187">Meeting rooms: {{ $venue->meeting_rooms ?? "0" }}</p>
                                                        </li>
                                                        <li>
                                                            <p class="greytext__cstelm0187">Distance: {{ $venue->distance_from_airport ?? "0.0 km" }}</p>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="card-content-box-list-item-right">
                                                        <li>
                                                            <p>Independent / Other</p>
                                                        </li>
                                                        <li>
                                                            <p class="greytext__cstelm0187">Total meeting space: {{ $venue->total_meeting_space ?? "0.0 sq ft" }}</p>
                                                            <p class="greytext__cstelm0187">Largest Room: {{ $venue->largest_room ?? "0.0 sq ft" }}</p>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="Page navigation pagination__venues_cards">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">
                                    < </a> </li> <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"> > </a></li>
                        </ul>
                        <div class="pagination-bottom-text">
                            <p>Don't see a venue?</p>
                            <p><a href="javascript:;">Send request</a> to add it to the Cvent Supplier Network.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 p-0">
                <div class="right-side-bar">
                    <div class="card__cst__right__elem">
                        <img class="card-img-top" src="{{ asset('front/img/v2.png') }}" class="img-fluid" alt="Card image cap">
                        <div class="card-body">
                            <a href="javascript:;" class="card__cst__right__elem-title">Promote Your Venue</a>
                            <p class="card__cst__right__elem-text">Add your venue here to attract high value
                                meetings and events.</p>
                            <a href="#" class="btn bluebtn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Modal -->
    <div class="modal fade" id="capacity__calculator__modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Capacity Calculator</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="capacity____calculator____wrapper">
                        <p>Meeting room layouts</p>
                        <select class="form-select" aria-label="Default select example">
                            <option value="Banquet rounds - 60">Banquet rounds - 60"</option>
                            <option value="Banquet rounds - 72">Banquet rounds - 72"</option>
                            <option value="Conference">Conference</option>
                            <option value="Hollow square">Hollow square</option>
                            <option value="Reception">Reception</option>
                            <option value="Classroom - 18">Classroom - 18"</option>
                            <option value="Classroom - 30">Classroom - 30"</option>
                            <option value="Table and chairs">Table and chairs</option>
                            <option value="Theater">Theater</option>
                            <option value="8 x 10 trade show">8' x 10' trade show</option>
                            <option value="10 x 10 trade show">10' x 10' trade show</option>
                            <option value="U-Shape">U-Shape</option>
                            <option value="Crescent rounds (Cabaret) - 60">Crescent rounds (Cabaret) - 60"</option>
                            <option value="Crescent rounds (Cabaret) - 66">Crescent rounds (Cabaret) - 66"</option>
                            <option value="Crescent rounds (Cabaret) - 72">Crescent rounds (Cabaret) - 72"</option>
                        </select>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Require rear projection
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Require a minimum distance between people
                            </label>
                        </div>
                        <hr>
                        <div class="row text-center">
                            <div class="col-lg-5">
                                <input type="text" class="form-control" placeholder="Enter Attendees Per Day">
                                Attendees per day
                            </div>
                            <div class="col-lg-2">
                                <h1>=</h1>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" placeholder="Enter Attendees Per Day">
                                sq. ft.
                            </div>
                        </div>

                        <a href="javascript:;" class="btn bluebtn">Apply</a>
                        <small class="text-center">After you click Apply, the largest room filter is updated to match
                            these calculations.</small>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="quickviewmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Venue</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="quick___view___card">
                        <div class="quick-view-card-image">
                            <img src="" class="img-fluid" alt="" id="venueImage">
                            <div class="quick__card__venue__abs__box">
                                <h3 id="company"></h3>
                                <p id="city"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <a href="" id="viewDetailURL" class="btn whitebtn">View Details</a>
                            </div>
                            {{-- <div class="col-lg-6 col-sm-6">
                                <a href="javascript:;" class="btn greenbtn"><i class="fa fa-check"></i> Venue
                                    Selected</a>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul class="venue__specs__list">
                                    <li>
                                        Guest rooms: <span id="guest_rooms"></span>
                                    </li>
                                    <li>
                                        Meeting rooms: <span id="meeting_rooms"></span>
                                    </li>
                                    <li>
                                        Total meeting space: <span id="total_meeting_space"></span>
                                    </li>
                                    <li>
                                        Largest room: <span id="largest_room"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <ul class="venue__specs__list">
                                    <li>
                                        Chain: <span id="chain"></span>
                                    </li>
                                    <li>
                                        Brand: <span id="brand"></span>
                                    </li>
                                    <li>
                                        Built: <span id="built"></span>
                                    </li>
                                    <li>
                                        Distance From Airport: <span id="airport_distance"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span class="badge rounded-pill bg-primary">Safety information </span>
                        <p class="venue__conten___cst___elms" id="descripion">
                            fadfa adfadf
                        </p>
                        <h5>Key Amenities</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <span id="ameneties"></span>
                                {{-- <ul>
                                    <li>Free airport shuttle</li>
                                    <li>Internet access</li>
                                    <li>Onsite catering</li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(document).on('click','#quickView', function() {
                let _this = $(this);

                let id            = _this.data('id');
                let image         = _this.data('image');
                let company       = _this.data('company');
                let city          = _this.data('city');
                let guest_room    = _this.data('total_guest_rooms');
                let rating        = _this.data('rating');
                let meeting_rooms = _this.data('meeting_rooms');
                let meeting_space = _this.data('total_meeting_space');
                let largest_room  = _this.data('largest_room');
                let chain         = _this.data('chain');
                let brand         = _this.data('brand');
                let built         = _this.data('built');
                let distance_from_airport = _this.data('distance_from_airport');
                let description = _this.data('description');
                let facilities  = _this.data('facilities');
                let venueDetailURL  = _this.data('venue_detail_url');

                console.log("URL", venueDetailURL);

                $('#venueImage').attr('src', image);
                $('#company').text(company);
                $('#city').text(city);
                $('#guest_rooms').text(guest_room);
                $('#total_meeting_space').text(meeting_space);
                $('#meeting_rooms').text(meeting_rooms);
                $('#largest_room').text(largest_room);
                $('#airport_distance').text(distance_from_airport);
                $('#chain').text(chain);
                $('#brand').text(brand);
                $('#built').text(built);

                $('#descripion').text(descripion);
                $('#facilities').text(facilities);
                $('#viewDetailURL').attr('href', venueDetailURL);


                $('#quickviewmodal').modal('show');
            });
        });
    </script>
@endsection