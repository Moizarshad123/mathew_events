<header class="desktopnav">
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">☰</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('search-result') }}">Search Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('single-venue') }}">Single Venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('checkout') }}">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('submit-request') }}">Submit Request</a>
                    </li>
                </ul>
                <div class="navbar-right-content">
                    <div class="dropdown">
                        <button class="btn navbarbtntop dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-building"></i> Venue list
                            <span class="venuecount">1</span>
                        </button>
                        <div class="dropdown-menu venuelistdropdownparent" aria-labelledby="dropdownMenuButton1">

                            <div class="venuelistdropdown">
                                <h3>Venue List</h3>
                                <p>Add venues!</p>
                                <p>Add up to 10 venues, then submit your request.</p>
                                <div class="venue-card">
                                    <div class="img-box">
                                        <img src="assets/img/ven1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="cont-box">
                                        <p class="hotel-name">Movenpick Hotel Karachi</p>
                                        <p class="hotel-location">Karachi, Pakistan</p>
                                        <a href="javascript:;">Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="venuelistdropdownfooter">
                                <a href="javascript:;" class="btn">Submit Request</a>
                                <p>
                                    Tell us about your event. Venues will respond back with a personalized quote!
                                </p>
                            </div>

                        </div>
                    </div>

                    <i class="settingsiconnavbar fa fa-cog"></i>
                    <a href="javascript:;" class="headerlinkslogin">Sign up</a>
                    <a href="{{ url('login') }}" class="headerlinkslogin">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="content">
                <h1>Find Meeting Venues, Request Quotes, and Book Event Space</h1>
                <p>No commission, no charges, no fees.</p>
            </div>
        </div>
    </div>
</header>

<header class="mobilenav">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front/img/logo.png')}}" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">☰</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('search-result') }}">Search Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('single-venue') }}">Single Venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('checkout') }}">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('submit-request') }}">Submit Request</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Venues List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="content">
                <h1>Find Meeting Venues, Request Quotes, and Book Event Space</h1>
                <p>No commission, no charges, no fees.</p>
            </div>
        </div>
    </div>
</header>