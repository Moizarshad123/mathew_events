<header class="desktopnav header-inner">
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front/img/logo.png')}}" class="img-fluid"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                            <span class="venuecount">{{ Cart::getTotalQuantity() }}</span>
                        </button>
                        <div class="dropdown-menu venuelistdropdownparent" aria-labelledby="dropdownMenuButton1">

                            <div class="venuelistdropdown">
                                <h3>Venue List</h3>
                                <p>Add venues!</p>
                                <p>Add up to 10 venues, then submit your request.</p>
                                @php $cartItems = \Cart::getContent(); @endphp
                                @forelse ($cartItems as $item)
                                <div class="venue-card">
                                    <div class="img-box">
                                        <img src="{{$item["attributes"]->image}}" style="height:50px; width:50px" class="img-fluid" alt="">
                                    </div>
                                    <div class="cont-box">
                                        <p class="hotel-name">{{ $item->name }}</p>
                                        <p class="hotel-location">{{$item["attributes"]->city}},
                                            {{ $item["attributes"]->state }}</p>
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" href="javascript:;" class="cont-box-remove-btn">Remove</button>
                                        </form>
                                    </div>
                                </div>

                                @empty

                                @endforelse
                            </div>

                            <div class="venuelistdropdownfooter">
                                @if(Cart::getTotalQuantity() > 0)
                                <a href="{{ url('submit-request') }}" class="btn">Submit Request</a>
                                @endif
                                <p>
                                    Tell us about your event. Venues will respond back with a personalized quote!
                                </p>
                            </div>

                        </div>
                    </div>
                    <a href="javascript:;" class="headerlinkslogin">Sign up</a>
                    <a href="{{ url('login') }}" class="headerlinkslogin">Login</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<header class="mobilenav">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="dropdown vencountmoblist___wrapper">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Cart::getTotalQuantity() }} Venue
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="venuelistdropdown">
                        <h3>Venue List</h3>
                        <p>Add venues!</p>
                        <p>Add up to 10 venues, then submit your request.</p>
                        @php $cartItems = \Cart::getContent(); @endphp
                        @forelse ($cartItems as $item)
                            <div class="venue-card">
                                <div class="img-box">
                                    <img src="{{$item["attributes"]->image}}" style="height:50px; width:50px" class="img-fluid" alt="">
                                </div>
                                <div class="cont-box">
                                    <p class="hotel-name">{{ $item->company }}</p>
                                    <p class="hotel-location">{{$item["attributes"]->city}},
                                        {{ $item["attributes"]->state }}</p>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" href="javascript:;" class="cont-box-remove-btn">Remove</button>
                                    </form>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>

            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">☰</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Where is your event?"
                            aria-label="Where is your event?" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-1 col-sm-1"></div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="bottombar-venues-count">
                        <p>1-3 of 3 venues</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="bottombar-venues-count">
                        <ul class="bottombar-venues-count-list">
                            <li>Sort by:</li>
                            <li>
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Cvent picks
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Cvent picks</a></li>
                                        <li><a class="dropdown-item" href="#">Alphabetical</a></li>
                                        <li><a class="dropdown-item" href="#">Distance</a></li>
                                        <li><a class="dropdown-item" href="#">Rating</a></li>
                                        <li><a class="dropdown-item" href="#">Total meeting space</a></li>
                                        <li><a class="dropdown-item" href="#">Guest Rooms</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#">About Sorting</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>