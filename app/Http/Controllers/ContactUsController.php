<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display the Contact Form. 
     *
     * @return View
     */

    public function create(){
    	return view('pages.contact');
    } 
}
