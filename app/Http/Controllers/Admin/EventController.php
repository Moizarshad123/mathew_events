<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use App\Models\Venue;

class EventController extends Controller
{
    public function upload_images(Request $request) {
        if ($request->method() == 'POST') {

            $validator = Validator::make($request->all(), [
                'venue_id' => 'required',
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

        } else {
            $venues = Venue::all();
            return view('front.events.upload_images', compact('venues'));
        }
    }
}
