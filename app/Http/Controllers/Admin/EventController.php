<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Venue;
use App\Models\VenueImage;
use App\Models\SupplierRequest;
use App\Models\VenueRequest;
use App\Models\OrderVenue;
use Auth;
use File; 

class EventController extends Controller
{
    public function upload_images(Request $request) {
        $venues = Venue::all();
        if ($request->method() == 'POST') {

            try {
                //code...
                $validator = Validator::make($request->all(), [
                    'venue_id' => 'required',
                ]);
                if ($validator->fails()){
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }
                $venue    = Venue::find($request->venue_id);
                $venue_id = $request->venue_id;
    
                $dirPath  = "uploads/".$venue->company;
                if($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $fileName = $image->getClientOriginalName();
                        if(File::exists(asset($dirPath.'/'.$fileName))){
                            File::delete(asset($dirPath.'/'.$fileName));
                        }    
                        $image->move(public_path($dirPath), $fileName);
        
                        $venue_image           = new VenueImage();
                        $venue_image->venue_id = $venue_id;
                        $venue_image->image    =  $dirPath.'/'.$fileName;
                        $venue_image->save();
                    }
                }
    
                return redirect()->back()->with('success', 'Images uploaded successfully...!!');
            } catch (\Exception $e) {
                //throw $th;
                return redirect()->back()->with('error', $e->getMessage());
            }
            

        } 
        else {
            return view('admin.venues.upload_images', compact('venues'));
        }
    }

    public function supplier_requests(Request $request) {
        $supplier_requests = SupplierRequest::orderByDESC('id')->paginate(30);
        return view('admin.supplier_requests', compact('supplier_requests'));
    }

    public function supplier_request_detail($id) {
        $content = SupplierRequest::find($id);
        return view('admin.supplier_request_detail', compact('content'));
    }

    public function venue_requests(Request $request) {
        $requests = VenueRequest::orderByDESC('id')->paginate(30);
        return view('admin.venues.venue_requests', compact('requests'));

    }

    public function venue_request_detail($id) {

        $venue = VenueRequest::with('orders')->where('id', $id)->first();
        return view('admin.venues.venue_request_detail', compact('venue'));

    }

    
}
