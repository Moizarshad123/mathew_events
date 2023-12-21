<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
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
}
