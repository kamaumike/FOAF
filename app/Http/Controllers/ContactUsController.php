<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display the Contact Form. 
     *
     * @return Response
     */

    public function create(){
    	return view('emails.contact');
    } 
}
