@extends('front.layouts.app')
@section('css')

@endsection

@section('content')
@if(str_contains(url()->current(), 'contact'))
@include('front.layouts.header')
@endif
<section class="contactus-main-section">
    <div class="container">
        <div class="content_section">
            <h2>Contact Us</h2>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('front/img/contact.jpg')}}" class="img-fluid contact-person-info-img" alt="">
            </div>
            <div class="col-md-8">
                <ul class="contact-person-info">
                    <li>Born in Brooklyn, NY</li>
                    <li>Grew up in West Virginia</li>
                    <li>Majored in K-12 Education at WV State University</li>
                    <li>Travels 95 to 125 days per year</li>
                    <li>Lost over 90 lbs and counting</li>
                    <li>Set a World Record with Card Tricks</li>
                    <li>Appeared on America's Got Talent (Got Cut, that sucked)</li>
                    <li>Has Since Appeared on Travel Channel, Food Network, Fox Sports Net, ABC and NBC</li>
                    <li>Currently writing 2 books, producing a TV show and launching 2 new podcasts</li>
                    <li>Aggressively chasing the dream to sign a deal with either NetFlix, Hulu, Amazon Or Apple</li>
                    <li>Loves to Play Golf</li>
                </ul>
                <div class="price-game-btn-wrapper">
                    <a href="#game-iframe-id" class="btn playpricegamebtn">Play the Price game!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-media-custom-section">
    <div class="container">
        <p class="smcs-content">
            Connect - Follow - Or Subscribe and be entered into a drawing for a <br> $500 Gift Card of Your Choice on
            New Years Eve!
        </p>
        <div class="row align-items-end">
            <div class="col-md-5">
                <div class="left-content-cus9327">
                    <p>Comedy Magician Dewayne Hill Tampa -- New York --San Jose -- London -- Dallas</p>
                    <div class="left-content-cus3241"><a href="javascript:;">Direct Email</a> | 1-855-30-Magic Or
                        1-855-306-2442</div>
                </div>
            </div>
            <div class="col-md-7">
                <ul class="os-cstelm4i12_socialmedia_list">
                    <li>
                        <a href="javascript:;"><img src="{{ asset('front/img/facebook.jpg') }}" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="{{ asset('front/img/insta.png') }}" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="{{ asset('front/img/linkedin.jpg') }}" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="{{ asset('front/img/youtube.jpg') }}" class="img-fluid" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="magicteamandstaff-section">
    <div class="container">
        <div class="content_section">
            <h2>Magic Team and Staff</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-8136"> Christine Lascano </p>
                <a href="javascript:;" class="email-7136"> Email </a>
                <p class="text-8521"> 813.358.3977 </p>
                <p class="text-2369"> VP of Booking​ </p>
                <ul class="text-77450s">
                    <li>
                        Communicates with client base
                    </li>
                    <li>
                        Oversees contract management
                    </li>
                    <li>
                        VP of Business Development
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <p class="text-8136"> Red De Leon </p>
                <a href="javascript:;" class="email-7136"> Email </a>
                <p class="text-8521"> 813.666.8758 </p>
                <p class="text-2369"> Business Development and Hospitality Liaison </p>
                <ul class="text-77450s">
                    <li>
                        Business Development meeting planners, event sales, convention service managers
                    </li>
                    <li>
                        Direct outreach for new business
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="game-iframe" id="game-iframe-id">
    <div class="container">
        <iframe srcdoc="{{ view('front.pricegame')->render() }}" width="600" height="400" title="Iframe Example"></iframe>
        {{-- <iframe srcdoc="{{ view('front.pricegame')->render() }}" height="400" width="100%" title="Iframe Example"></iframe> --}}
    </div>
</section>

<section class="contact-team-sec">
    <div class="container">
        <ul class="team-card-list">
            <li>
                <div class="teamcard">
                    <div class="tc___img-box">
                        <img src="{{ asset('front/img/c1.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="tc___content-box">
                        <p class="team__member__name">
                            Angela Dileone<br> VIP Beauty Stylist
                        </p>
                        <ul>
                            <li>Hair and Makeup for filming</li>
                            <li>Imagine Consultant</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="teamcard">
                    <div class="tc___img-box">
                        <img src="{{ asset('front/img/c2.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="tc___content-box">
                        <p class="team__member__name">
                            John "Dash" Dixon <br>Music Producer
                        </p>
                        <ul>
                            <li>Music Composer for Dhill productions and media</li>
                            <li>Sound Editor</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="teamcard">
                    <div class="tc___img-box">
                        <img src="{{ asset('front/img/c3.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="tc___content-box">
                        <p class="team__member__name">
                            Gabriel Brito <br>Post Production
                        </p>
                        <ul>
                            <li>Post Production Editing</li>
                            <li>Chief Vlog Editor</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="special-thanks-section">
    <div class="container">
        <div class="content_sec">
            <h6>Special Thanks: </h6>
            <p>
                <i>Charles Erdnase & Erdnase Real Estate Group - the first and Principal Angel Investor in Dewayne's TV
                    production. "I will always be grateful to you for believing in the dream and idea when many other
                    people passed and doubted. Your belief allowed me to believe in myself and my own ideas even more!
                    Thank you my friend"</i>
            </p>
            <p>
                Matthew Fiorenza, CEO of FindingPrime - serves as business strategist and business coach to Dewayne Hill
                for the last 3 years
            </p>
            <p>
                Tony Robbins Coaching Program - for the on-going coaching
            </p>
            <p>
                Zig Ziglar Organization - for advanced sales training and workshops
            </p>
            <p>
                Stephen Covey Group- Always reminding you to sharpen the saw on the 7 habits
            </p>
        </div>
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
