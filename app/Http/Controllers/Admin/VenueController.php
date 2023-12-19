<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\VenueImage;

use File; 

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Venue::orderByDESC('id')->paginate(220);
        return view('admin.venues.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.venues.create');  
    }

    public function store(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), [
                'company' => 'required',
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            //code...
            $venue = Venue::create([
                "company" => $request->company,
                "city"    => $request->city,
                "state"   => $request->state,
                "mailing_address" => $request->mailing_address,
                "phone"   => $request->phone,
                "website" => $request->website,
                "zip"     => $request->zip,
                "chain"   => $request->chain,
                "built"   => $request->built,
                "venue_type" => $request->venue_type,
                "brand"      => $request->brand,
                "rennovated" => $request->rennovated,
                "guest_rooms" => $request->guest_rooms,
                "ratings" => $request->ratings,
                "distance_from_airport" => $request->distance_from_airport,
                "parking" => $request->parking,
                "total_meeting_space" => $request->total_meeting_space,
                "largest_room" => $request->largest_room,
                "second_largest_room" => $request->second_largest_room,
                "meeting_rooms" => $request->meeting_rooms,
                "total_guest_rooms" => $request->total_guest_rooms,
                "suites" => $request->suites,
                "room_features" => $request->room_features,
                "business_services" => $request->business_services,
                "recreational_activities" => $request->recreational_activities,
                "venue_accessiblity" => $request->venue_accessiblity,
                "facilities"  => $request->facilities,
                "description" => $request->description,
                "cancellation_policy" => $request->cancellation_policy
            ]);
    
            $dirPath  = "uploads/venues/".$request->company;
            if($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $fileName = $image->getClientOriginalName();
                    if(File::exists(asset($dirPath.'/'.$fileName))){
                        File::delete(asset($dirPath.'/'.$fileName));
                    }    
                    $image->move(public_path($dirPath), $fileName);
    
                    $venue_image           = new VenueImage();
                    $venue_image->venue_id = $venue->id;
                    $venue_image->image    =  $dirPath.'/'.$fileName;
                    $venue_image->save();
                }
            }
            return redirect()->back()->with('success','venue created!!');

        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $content = Venue::find($id);
        return view('admin.venues.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        try {

            $validator = Validator::make($request->all(), [
                'company' => 'required',
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            //code...
            $venue = Venue::find($id);
            $venue->company         = $request->company;
            $venue->city            = $request->city;
            $venue->state           = $request->state;
            $venue->mailing_address = $request->mailing_address;
            $venue->phone       = $request->phone;
            $venue->website     = $request->website;
            $venue->zip         = $request->zip;
            $venue->chain       = $request->chain;
            $venue->built       = $request->built;
            $venue->venue_type  = $request->venue_type;
            $venue->brand       = $request->brand;
            $venue->rennovated  = $request->rennovated;
            $venue->guest_rooms = $request->guest_rooms;
            $venue->ratings     = $request->ratings;
            $venue->distance_from_airport   = $request->distance_from_airport;
            $venue->parking                 = $request->parking;
            $venue->total_meeting_space     = $request->total_meeting_space;
            $venue->largest_room            = $request->largest_room;
            $venue->second_largest_room     = $request->second_largest_room;
            $venue->meeting_rooms           = $request->meeting_rooms;
            $venue->total_guest_rooms       = $request->total_guest_rooms;
            $venue->suites                  = $request->suites;
            $venue->room_features           = $request->room_features;
            $venue->business_services       = $request->business_services;
            $venue->recreational_activities = $request->recreational_activities;
            $venue->venue_accessiblity      = $request->venue_accessiblity;
            $venue->facilities              = $request->facilities;
            $venue->description             = $request->description;
            $venue->cancellation_policy     = $request->cancellation_policy;
            $venue->save();            

            $dirPath  = "uploads/venues/".$request->company;
            if($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $fileName = $image->getClientOriginalName();
                    if(File::exists(asset($dirPath.'/'.$fileName))){
                        File::delete(asset($dirPath.'/'.$fileName));
                    }    
                    $image->move(public_path($dirPath), $fileName);
    
                    $venue_image           = new VenueImage();
                    $venue_image->venue_id = $venue->id;
                    $venue_image->image    =  $dirPath.'/'.$fileName;
                    $venue_image->save();
                }
            }
            return redirect()->back()->with('success','venue updated!!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function destroy($id)
    {
        $content = Venue::find($id);
        VenueImage::where('venue_id', $id)->delete();
        $content->delete(); 
        echo 1;
    }
}
