@extends('front.layouts.app')
@section('css')
@endsection

@section('content')
    @if(str_contains(url()->current(), 'submit-request'))
        @include('front.layouts.header4')
    @endif
    <section class="request__info__section">
        <div class="container">
            <div class="venues-cards-wrapper">
                <div class="content">
                    <h2>You're about to request a quote from these {{ Cart::getTotalQuantity() }} venues</h2>
                </div>
                <hr>
                @forelse ($cartItems as $item)
                    @php $get_extra_detail = App\Models\Venue::find($item->id); @endphp
                    <div class="venues_card">
                        <div class="delete___venue__btn___wrapper">
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="btn greybtn"><i class="fa fa-times"></i> Remove</button>
                            </form>
                        </div>
                    
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="card-img-box">
                                    <img src="{{$item["attributes"]->image}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card-content-box">
                                    <div class="card-content-box-venue-wrapper">
                                        <a href="javascript:;">{{ $item->name }}</a>
                                        <p><i class="fa fa-map-pin"></i> {{$item["attributes"]->city}}, {{ $item["attributes"]->state }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <ul class="card-content-box-list-item-left">
                                                <li>
                                                    <p class="greytext__cstelm0187">Guest rooms: {{ $get_extra_detail->guest_rooms }}</p>
                                                </li>
                                                <li>
                                                    <p class="greytext__cstelm0187">Meeting rooms: {{ $get_extra_detail->meeting_rooms }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <ul class="card-content-box-list-item-right">                                            
                                                <li>
                                                    <p class="greytext__cstelm0187">Total meeting space: {{ $get_extra_detail->total_meeting_space }}</p>
                                                </li>
                                                <li>
                                                    <p class="greytext__cstelm0187">Largest space:  {{ $get_extra_detail->largest_room }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                @empty
                    
                @endforelse
                {{-- <hr>
                <div class="venues_card">
                    <div class="delete___venue__btn___wrapper">
                        <a href="javascript:;" class="btn greybtn"><i class="fa fa-times"></i> Delete</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card-img-box">
                                <img src="{{ asset('front/img/ven1.webp')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="card-content-box">
                                <div class="card-content-box-venue-wrapper">
                                    <a href="javascript:;">Regent Plaza Hotel &amp; Convention Centre Karachi</a>
                                    <p><i class="fa fa-map-pin"></i> Karachi, PK</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <ul class="card-content-box-list-item-left">
                                            <li>
                                                <p class="greytext__cstelm0187">Guest rooms: 413</p>
                                            </li>
                                            <li>
                                                <p class="greytext__cstelm0187">Meeting rooms: 8</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <ul class="card-content-box-list-item-right">                                            
                                            <li>
                                                <p class="greytext__cstelm0187">Total meeting space: 65,000 sq. ft.</p>
                                            </li>
                                            <li>
                                                <p class="greytext__cstelm0187">Largest space: < 1,000 sq. ft.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="continue___searching___wrapper">
                <div class="continue___searching___wrapper__inner">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-sm-6">
                            <p>You can add {{ 10 - Cart::getTotalQuantity() }} more venues to your request.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a href="{{ url('/') }}" class="btn lightbluebtn">Continue searching > </a>
                        </div>
                    </div>
                </div>

                <div class="bottom___btns___wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-sm-6">
                            <a href="javascript:;"> < Back to search results</a>
                        </div>
                        <div class="col-lg-1 col-sm-3">
                            <a href="{{ url('login') }}" class="btn greybtn">Login</a>
                        </div>
                        <div class="col-lg-3 col-sm-3">
                            <a href="{{  url('checkout') }}" class="btn greenbtn">Continue as guest > </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
@endsection