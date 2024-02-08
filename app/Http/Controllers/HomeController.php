<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\VenueImage;
use App\Models\Blog;
use App\Models\SupplierRequest;
use App\Models\Contact;
use Config;


class HomeController extends Controller
{
    public function index()
    {
        $top3   = Blog::orderByDESC('id')->skip(0)->take(3)->get();
        $blogs  = Blog::orderByDESC('id')->skip(3)->take(4)->get();
        $venues = Venue::all();
        $cities = Venue::select('city')->distinct()->get();
        return view('front.index', compact('venues', 'top3', 'blogs', 'cities'));
    }

    public function new_supplier_request() {
        return view('front.newSupplierRequest');
    }

    public function search_venue(Request $request) {

        $cartItems = \Cart::getContent();
        $cities = Venue::select('city')->distinct()->get();
        $venues    = Venue::with('venue_images');
        $areas  = Config::get('constants.areas');
        $chainsAndAffiliates  = Config::get('constants.chains_and_affiliates');


        if($request->has('city') && $request->get('city') != null){
            $venues = $venues->where('city', 'LIKE', '%'.$request->city.'%');
        }

        if($request->has('ratings') && $request->get('ratings') != ""){
            $ratings = explode('-', $request->get('ratings'));
            $venues = $venues->where('ratings', '>=', $ratings[0])
                ->where('ratings', '<=', $ratings[1]);
        }

        if($request->has('guest_rooms') && $request->get('guest_rooms') > 0){
            $grLimits = explode('-', $request->get('guest_rooms'));
            $venues = $venues->where('guest_rooms', '>=', $grLimits[0])
                ->where('guest_rooms', '<=', $grLimits[1]);
        }

        if($request->has('largest_room') && $request->get('largest_room') > 0){
            $largestRoomLimits = explode('-', $request->get('largest_room'));
            $venues = $venues->where('largest_room', '>=', $largestRoomLimits[0])
                ->where('largest_room', '<=', $largestRoomLimits[1]);
        }

        if($request->has('second_largest_room') && $request->get('second_largest_room') > 0){
            $largestRoom2ndLimits = explode('-', $request->get('second_largest_room'));
            $venues = $venues->where('second_largest_room', '>=', $largestRoom2ndLimits[0])
                ->where('second_largest_room', '<=', $largestRoom2ndLimits[1]);
        }

        if($request->has('total_meeting_space') && $request->get('total_meeting_space') > 0){
            $totalMSLimits = explode('-', $request->get('total_meeting_space'));
            $venues = $venues->where('total_meeting_space', '>=', $totalMSLimits[0])
                ->where('total_meeting_space', '<=', $totalMSLimits[1]);
        }

        if($request->has('meeting_rooms') && $request->get('meeting_rooms') > 0){
            $meetingRoomsLimits = explode('-', $request->get('meeting_rooms'));
            $venues = $venues->where('meeting_rooms', '>=', $meetingRoomsLimits[0])
                ->where('meeting_rooms', '<=', $meetingRoomsLimits[1]);
        }

        if($request->has('ceiling_height') && $request->get('ceiling_height') > 0){
            $ceilingHeightLimits = explode('-', $request->get('ceiling_height'));
            $venues = $venues->where('ceiling_height', '>=', $ceilingHeightLimits[0])
                ->where('ceiling_height', '<=', $ceilingHeightLimits[1]);
        }

        if($request->has('area') && $request->get('area') != null){
            $areaFilter = explode(",", $request->area);
            $venues = $venues->whereIn('area', $areaFilter);
        }

        if($request->has('venue_type') && $request->get('venue_type') != null){
            $typeFilter = explode(",", $request->venue_type);
            $venues = $venues->whereIn('venue_type', $typeFilter);
        }

        if($request->has('chains') && $request->get('chains') != null){
            $chainFilter = explode(",", $request->chains);
            $venues = $venues->whereIn('chain', $chainFilter)
                ->orWhereIn('brand', $chainFilter)->orWhereIn('company', $chainFilter);
        }

        if($request->has('df_airport') && $request->get('df_airport') > 0){
            $venues = $venues->where('distance_from_airport', '<=', $request->df_airport);
        }

        $venues = $venues->paginate(20);

        return view('front.events.search_result', compact('venues', 'cartItems', 'cities', 'areas', 'chainsAndAffiliates'));
        // return redirect('search-result')->with('venue',$venue);
    }

    public function filter_venue(Request $request){

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
