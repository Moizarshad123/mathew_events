<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VenueRequest;
use App\Models\OrderVenue;
use Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('cart', compact('cartItems'));
    }

    public function submit_request(Request $request) {
        $cartItems = \Cart::getContent();
        return view('front.events.submit_request', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
       
        if(\Cart::getTotalQuantity() < 10) {
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => 250,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $request->image,
                    "city" => $request->city,
                    "state" => $request->state,
                )
            ]);
            return redirect()->back()->with('success', 'Venue Added');

        } else {
            return redirect()->back()->with('error', 'Your are not allowed to add more than 10 venues..!!');

        }

    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        // return redirect()->route('cart.list');
        return redirect()->back()->with('success', 'Venue Deleted');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }


    public function submit_venue_request(Request $request) {

        if(isset(Auth::user()->id)) {
            $userid = Auth::user()->id;
        } else {
            $userid = 0;
        }
        $venue = VenueRequest::create([
            "user_id"                  => $userid,
            "event_type"               => $request->event_type,
            "arriving_date"            => $request->arriving_date,
            "departure_date"           => $request->departing_date,
            "is_event_dates_flexible"  => $request->flexibledates,
            "event_need_guest_rooms"   => $request->guestrooms,
            "guest_rooms_per_night"    => $request->guest_room_per_night,
            "people_per_guest_room"    => $request->people_per_guest_room,
            "event_need_meeting_rooms" => $request->need_meetingrooms,
            "attendees_per_day"        => $request->attendees_per_day,
            "description"              => $request->moreaboutevents,
            "planning_for_another_organization" => $request->eventForOtherOrganization,
            "name"            => $request->first_name.' '.$request->last_name,
            "email"           => $request->email,
            "phone"           => $request->phone,
            "city"            => $request->city,
            "country"         => $request->country,
            "organization"    => $request->organization,
            "commission_rate" => $request->commission_rate,
            "client_organization_name" => $request->client_organization_name,
            "client_organization" => $request->client_organization,
            "industry"            => $request->industry,
            "hear_from_venues_by" => $request->hear_venue_date,
            "contacted_via"       => $request->preferredContactMethods
        ]);


        $cartItems = \Cart::getContent();

        foreach ($cartItems as $item) {
            # code...
            $order_venue = OrderVenue::create([
                "venue_request_id" => $venue->id,
                "user_id"          => $userid,
                "venue_id"         => $item->id,
                "venue"            => $item->name,
                "city"             => $item["attributes"]->city,
                "state"            => $item["attributes"]->state,
                "image"            => $item["attributes"]->image
            ]);
        }

        \Cart::clear();

        return redirect('/')->with('success', 'Venue Request submitted successfully...!!');
    }
}
