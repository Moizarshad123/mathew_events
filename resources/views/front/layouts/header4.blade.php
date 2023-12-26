<header class="desktopnav">
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
                    {{-- <li class="nav-item">
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
                    </li> --}}

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
                    @if(!auth()->user())

                        <a href="{{ url('register') }}" class="headerlinkslogin">Sign up</a>
                        <a href="{{ url('login') }}" class="headerlinkslogin">Login</a>
                    @else
                        <a href="javascript:;" class="headerlinkslogin">{{ auth()->user()->name }}</a>
                    @endif
                    <a href="{{ url('contact') }}" class="headerlinkslogin" target="blank">Contact Us</a>

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
            <div class="content">
                <h1>Find Meeting Venues, Request Quotes, and Book Event Space</h1>
                <p>No commission, no charges, no fees.</p>
            </div>
        </div>
    </div>
</header>