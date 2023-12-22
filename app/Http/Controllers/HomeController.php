<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class HomeController extends Controller
{
    public function index()
    {
        $venues = Venue::all();
        return view('front.index', compact('venues'));
    }

    public function search_venue(Request $request) {
        $venues = Venue::with('venue_images')->where('id', $request->venue_id)->paginate(20);
        $cartItems = \Cart::getContent();
        return view('front.events.search_result', compact('venues', 'cartItems'));
        // return redirect('search-result')->with('venue',$venue);        
    }

    public function venue_detail($id) {
        $venue = Venue::with('venue_images')->where('id', $id)->first();
        return view('front.events.single-venue', compact('venue'));
    }

    public function checkout(Request $request) {
        return view('front.events.checkout');
    }

    public function supplier_request(Request $request){
        return view('front.events.supplier_request');
    }
}
