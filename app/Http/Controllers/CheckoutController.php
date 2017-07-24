<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;

class CheckoutController extends Controller
{  
    /**
     * Create a new controller instance.
     * Ensure user log's in
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the Checkout page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       

        if (sizeof(Cart::content()) > 0) {
            
            return view('shop.checkout');
        }        
        else {

            return redirect('/shop')->withSuccessMessage('Please add an item to your cart!');
        }
    }    
}
