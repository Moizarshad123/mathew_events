<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
        return view('front.index');
    }

    public function search_result(Request $request) {
        return view('front.search_result');

    }
    public function single_venue(Request $request) {
        return view('front.events.single-venue');
    }

    public function checkout(Request $request) {
        return view('front.events.checkout');
    }


    public function submit_request(Request $request) {
        return view('front.events.submit_request');
    }

    

    
}
