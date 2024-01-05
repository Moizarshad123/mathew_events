<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\VenueImage;
use App\Models\Blog;
use App\Models\SupplierRequest;
use App\Models\Contact;


class HomeController extends Controller
{
    public function index()
    {
        $top3   = Blog::orderByDESC('id')->skip(0)->take(3)->get();
        $blogs  = Blog::orderByDESC('id')->skip(3)->take(4)->get();
        $venues = Venue::all();
        return view('front.index', compact('venues', 'top3', 'blogs'));
    }

    public function new_supplier_request() {
        return view('front.newSupplierRequest');
    }

    public function search_venue(Request $request) {

        $venues    = Venue::with('venue_images')->where('id', $request->venue_id)->paginate(20);
        $cartItems = \Cart::getContent();
        return view('front.events.search_result', compact('venues', 'cartItems'));
        // return redirect('search-result')->with('venue',$venue);        
    }

    public function venue_detail($id) {
        $venue        = Venue::where('id', $id)->first();
        $venue_images = VenueImage::where('venue_id', $id)->get();
        return view('front.events.single-venue', compact('venue', 'venue_images'));
    }

    public function checkout(Request $request) {
        $cartItems = \Cart::getContent();

        return view('front.events.checkout', compact('cartItems'));
    }

    public function supplier_request(Request $request){
        return view('front.events.supplier_request');
    }

    public function submit_supplier_request(Request $request) {
        $supplier_request = SupplierRequest::create([
            "supplier_name"     => $request->supplier_name,
            "supplier_phone"    => $request->supplier_phone,
            "supplier_address1" => $request->supplier_address1,
            "supplier_address2" => $request->supplier_address2,
            "supplier_state"    => $request->supplier_state,
            "supplier_city"     => $request->supplier_city,
            "supplier_zip"      => $request->supplier_zip,
            "supplier_country" => $request->supplier_country,
            "supplier_info"    => $request->supplier_info,
            "requestor_fname"  => $request->requestor_fname,
            "requestor_lname"  => $request->requestor_lname,
            "requestor_organization" => $request->requestor_organization,
            "requestor_email" => $request->requestor_email,
            "requestor_phone" => $request->requestor_phone,
            "requestor_info"  => $request->requestor_info,
        ]);

        return redirect('/')->with('success', 'New Supplier request submitted successfully...!!');
    }

    public function blog_detail($id) {
        $blog = Blog::find($id);
        return view('front.blogs.detail',compact('blog'));
    }

    public function contact() {
        return view('front.contact');
    }

    public function contact_submit(Request $request) {
        $contact = Contact::create([
            "email"        => $request->email,
            "event_date"   => $request->event_date,
            "no_of_guests" => $request->no_of_guests,
            "eventType"    => $request->eventType,
            "lodging_handled" => $request->lodging_handled,
            "address"         => $request->address,
            "hear_about_us"   => $request->hear_about_us,
        ]);

        return redirect('/')->with('success', 'Contact Submitted successfully...!!');
    }
}
