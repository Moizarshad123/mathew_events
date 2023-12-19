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
        $venues = Venue::with('venue_images')->where('id', $request->venue_id)->get();
        return view('front.events.search_result', compact('venues'));
        // return redirect('search-result')->with('venue',$venue);
        
    }
    
    // public function search_result(Request $request) {
        
    //     $venue = session()->get('venue'); 

    // }

    public function venue_detail($id) {
        $venue = Venue::with('venue_images')->where('id', $id)->first();
        return view('front.events.single-venue', compact('venue'));
    }

    public function checkout(Request $request) {
        return view('front.events.checkout');
    }


    public function submit_request(Request $request) {
        return view('front.events.submit_request');
    }

    

    
}
