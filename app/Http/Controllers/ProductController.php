<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display Shop page with all products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $products = Product::all();

        return view('shop.index')->with('products', $products);        
    }
   
    /**
     * Display Product page with the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($item)
    {        
        $product = Product::where('slug', $item)->firstOrFail();

        $interested = Product::where('slug', '!=', $item)->get()->random(4);

        return view('shop.product')->with(['product' => $product, 'interested' => $interested]);        
    }

}
