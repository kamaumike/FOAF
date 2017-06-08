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
