@extends('front.layouts.app')
@section('css')
@endsection

@section('content')
    @if(str_contains(url()->current(), 'checkout'))
        @include('front.layouts.header4')
    @endif
    <section class="checkout-form-section">
        <div class="container">
            <div class="card-header">
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-link tab-pills" href="#"> <span>1</span> Personal Details</a>
                    <a class="nav-link tab-pills" href="#"> <span>2</span> Address Details</a>
                    <a class="nav-link tab-pills" href="#"> <span>3</span> Company Details</a>
                    <a class="nav-link tab-pills" href="#"> <span>4</span> Finish</a>
                </nav>
            </div>
            <form class="card">
                <div class="card-body">

                    <div class="tab d-none">
                        <h2>Tell us about your event! These details will help your request receive fast and accurate quotes. </h2>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">EVENT
                                    TYPE</label>
                            </div>
                            <div class="col-md-8">
                                <label for="">EVENT TYPES</label>
                                <select class="form-select form-select-sm" id="type" name="type">
                                    <option value=""></option>
                                    <option value="Anniversary or birthday">Anniversary or birthday</option>
                                    <option value="Bachelor or bachelorette party">Bachelor or bachelorette party</option>
                                    <option value="Bar or bat mitzvah">Bar or bat mitzvah</option>
                                    <option value="Business meeting">Business meeting</option>
                                    <option value="Conference or convention">Conference or convention</option>
                                    <option value="Corporate event">Corporate event</option>
                                    <option value="Customer event">Customer event</option>
                                    <option value="Education or seminar">Education or seminar</option>
                                    <option value="Fraternity or sorority group">Fraternity or sorority group</option>
                                    <option value="Fundraiser or charity event">Fundraiser or charity event</option>
                                    <option value="Incentive travel">Incentive travel</option>
                                    <option value="Reception or holiday party">Reception or holiday party</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Shareholders meeting">Shareholders meeting</option>
                                    <option value="Special event">Special event</option>
                                    <option value="Sports event">Sports event</option>
                                    <option value="Team building event">Team building event</option>
                                    <option value="Tour group or vacation">Tour group or vacation</option>
                                    <option value="Trade or consumer show">Trade or consumer show</option>
                                    <option value="Training">Training</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">EVENT DATE</label>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Arriving on</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Departing on</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="radio-btn-wrapper">
                                            <label for="">Are your event dates flexible?</label>
                                            <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="flexibledates" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="flexibledates" value="no">No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">GUEST
                                    ROOMS</label>
                            </div>
                            <div class="col-md-8">
                                <div class="radio-btn-wrapper">
                                    <label for="">Does your event needs guest rooms?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="guestrooms" value="Yes" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="guestrooms" value="No">No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">MEETING
                                    SPACE</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="radio-btn-wrapper">
                                        <div class="col-md-12">
                                            <label for="">Does your event need meeting rooms?</label>
                                            <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms" value="No">No
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Attendees per day</label>
                                        <input type="text" class="form-control" name="attendees_per_day">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="radio-btn-wrapper">
                                            <label>Build your event's agenda by adding agenda items.</label>
                                            <br>
                                            <a href="javascript:;" class="btn greybtn">Agenda Items</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">TELL US MORE ABOUT
                                    YOUR EVENT</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="event_detail" cols="20" rows="10" class="form-control"></textarea>
                            </div>
                        </div>


                    </div>

                    <div class="tab d-none">
                        <h2>
                            Great! Now let us know your contact information so venues can respond to your request.
                        </h2>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">PLANNER
                                    INFORMATION</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="radio-btn-wrapper">
                                        <div class="col-md-12">
                                            <label for="">Does your event need meeting rooms?</label>
                                            <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms2" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms2" value="No">No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">First name</label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Last name</label>
                                            <input type="text" class="form-control" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">City</label>
                                            <input type="text" class="form-control" name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Country/Region</label>
                                            <input type="text" name="country" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                                            <label class="form-check-label">Create my free Cvent account using these details</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">RESPONSES</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">When do you need to hear from venues by?</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="radio-btn-wrapper">
                                            <label for="">How do you prefer to be contacted?</label>
                                            <select class="form-select" id="preferredContactMethods" name="preferredContactMethods">
                                                <option data-cvent-id="option-0" value="0">Phone</option>
                                                <option data-cvent-id="option-1" value="1">Email</option>
                                                <option data-cvent-id="option-2" value="2">Phone or email</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">SHARING</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            By checking this box, I agree to share the personal information provided on this RFP to the selected hotels. To learn more, read Cvent's 
                                            <a href="javascript::">Privacy Policy</a> and <a href="javascript:;">Terms of Use.</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab d-none">
                        <h2>
                            You're almost finished! Review the following details and then submit when you're ready to send your request.
                        </h2>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">SHARING</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="confirmation_content_wrapper">
                                            <p class="content_one____CSTELMS1">Bar or bat mitzvah</p>
                                            <p class="content_one____CSTELMS2">12/20/2023 — 12/20/2023</p>
                                            <p class="content_one____CSTELMS3">Event dates are flexible.</p>
                                            <p class="content_one____CSTELMS4">2 attendees per day</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:;" class="btn greybtn">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">CONTACT DETAILS</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="confirmation_content_wrapper">
                                            <p class="content_one____CSTELMS_name">Lorem Ipsum</p>
                                            <p class="content_one____CSTELMS_email">testmail@gmail.com</p>
                                            <p class="content_one____CSTELMS_phone">+923 123 456 789</p>
                                            <p class="content_one____CSTELMS_location">Karachi, Pakistan</p>
                                            <p class="content_one____CSTELMS_message">Contact by email before Friday, December 15, 2023</p>
                                            <p class="content_one____CSTELMS_message">Creating Cvent account using contact details.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:;" class="btn greybtn">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <ul class="details___privacypolicy__list">
                                    <li>
                                        <a href="javascript:;">Privacy Policy</a>
                                    </li>
                                    <li> | </li>
                                    <li>
                                        <a href="javascript:;">Your Privacy Choices</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab d-none">
                        <h2>
                            Congratulations! You sent your request to 2 venues. Don’t forget to check your email for responses.
                        </h2>
                        <hr>
                        <div class="venue_card__cst___elms">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="assets/img/ven1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-9">
                                    <a href="javascript:;">Regent Plaza Hotel & Convention Centre Karachi</a>
                                    <p><i class="fa fa-map-pin"></i> Karachi, PK</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="venue_card__cst___elms">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="assets/img/ven1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-9">
                                    <a href="javascript:;">Regent Plaza Hotel & Convention Centre Karachi</a>
                                    <p><i class="fa fa-map-pin"></i> Karachi, PK</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="congratulations-message">
                            <h3>Want to make your next request even easier?</h3>
                            <p>Your account has been created. Please check your email to activate your Cvent account.</p>
                            <ul>
                                <li><i class="fa fa-check"></i> View all your requests in one location</li>
                                <li><i class="fa fa-check"></i> Run reports to compare proposals side-by-side</li>
                                <li><i class="fa fa-check"></i> Add more venues to your request</li>
                                <li><i class="fa fa-check"></i> Track requests for multiple events</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <button type="button" id="back_button" class="btn greybtn" onclick="back()">Back</button>
                        <button type="button" id="next_button" class="btn greenbtn ms-auto"
                            onclick="next()">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('js')

<script>
    var current = 0;
    var tabs = $(".tab");
    var tabs_pill = $(".tab-pills");

    loadFormData(current);

    function loadFormData(n) {
        $(tabs_pill[n]).addClass("active");
        $(tabs[n]).removeClass("d-none");
        $("#back_button").attr("disabled", n == 0 ? true : false);
        n == tabs.length - 1 ?
            $("#next_button").text("Submit").removeAttr("onclick") :
            $("#next_button")
            .attr("type", "button")
            .text("Next")
            .attr("onclick", "next()");
    }

    function next() {
        $(tabs[current]).addClass("d-none");

        current++;
        loadFormData(current);
    }

    function back() {
        $(tabs[current]).addClass("d-none");
        $(tabs_pill[current]).removeClass("active");

        current--;
        loadFormData(current);
    }
</script>
@endsection