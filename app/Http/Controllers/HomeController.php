<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\VenueImage;
use App\Models\Blog;


class HomeController extends Controller
{
    public function index()
    {
        $top3   = Blog::orderByDESC('id')->skip(0)->take(3)->get();
        $blogs  = Blog::orderByDESC('id')->skip(3)->take(4)->get();
        $venues = Venue::all();
        return view('front.index', compact('venues', 'top3', 'blogs'));
    }

    public function search_venue(Request $request) {

        $venues    = Venue::with('venue_images')->where('id', $request->venue_id)->paginate(20);
        $cartItems = \Cart::getContent();
        return view('front.events.search_result', compact('venues', 'cartItems'));
        // return redirect('search-result')->with('venue',$venue);        
    }

    public function venue_detail($id) {
        $venue = Venue::where('id', $id)->first();
        $venue_images = VenueImage::where('venue_id', $id)->get();
        return view('front.events.single-venue', compact('venue', 'venue_images'));
    }

    public function checkout(Request $request) {
        return view('front.events.checkout');
    }

    public function supplier_request(Request $request){
        return view('front.events.supplier_request');
    }

    public function blog_detail($id) {
        $blog = Blog::find($id);
        return view('front.blogs.detail',compact('blog'));
    }
}
