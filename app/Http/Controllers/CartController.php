<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;

class CartController extends Controller
{
    /**
     * Display the Shopping Cart page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.cart');
    }

    /**
     * Add item to cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('/cart')->withSuccessMessage('Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect('/cart')->withSuccessMessage('Item was added to your cart!');
    }

    /**
     * Update the quantity of an item in cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

    }

    /**
     * Remove an item from cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('/cart')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Empty the shopping cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('/cart')->withSuccessMessage('Your cart has been cleared!');
    }    
}
