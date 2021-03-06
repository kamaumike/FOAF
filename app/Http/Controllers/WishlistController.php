<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;

class WishlistController extends Controller
{
    /**
     * Display the Wishlist page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.wishlist');
    }

    /**
     * Add item to Wishlist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('/shop')->withSuccessMessage('Item is already in your wishlist!');
        }

        Cart::instance('wishlist')->add($request->id, $request->name, 1, $request->price)
                                  ->associate('App\Product');

        return redirect('/shop')->withSuccessMessage('Item was added to your wishlist!');       
    }

    /**
     * Remove an item from Wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        Cart::instance('wishlist')->remove($id);
        return redirect('/wishlist')->withSuccessMessage('Item has been removed!');        
    }

    /**
     * Empty the Wishlist.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();
        return redirect('/wishlist')->withSuccessMessage('Your wishlist has been cleared!');
    }

    /**
     * Move item from Wishlist to Shopping cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moveToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);

        Cart::instance('wishlist')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('/cart')->withSuccessMessage('Item is already in your shopping cart!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
                                 ->associate('App\Product');

        return redirect('/wishlist')->withSuccessMessage('Item has been moved to your shopping cart!');

    }    
}
