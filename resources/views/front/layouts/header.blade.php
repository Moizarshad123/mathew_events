<header>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Luxury</a>
                    </li> --}}
                </ul>
                <div class="navbar-right-content">
                    <a class="btn navbarbtntop" href="javascript:;"><i class="fa fa-building"></i> Venue list</a>
                    <i class="settingsiconnavbar fa fa-cog"></i>
                    <a href="javascript:;." class="headerlinkslogin">Sign up</a>
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