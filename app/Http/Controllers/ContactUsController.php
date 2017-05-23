<?php

namespace App\Http\Controllers;

use Mail;
use App\Contact;
use App\Mail\ContactUs;
use App\Http\Requests\ContactUsRequest;





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
    

    /**
     * Save the contact details
     * Email the contact details
     *
     * @param ContactUsRequest $request
     * @return Redirect
     */

    public function store(ContactUsRequest $request){

        $contact = Contact::create(

            request(['name','email','message'])            

            );
    	
    	
    	Mail::to($contact)->send(new ContactUs($contact));

    	return back()->with('success', 'Message sent!');
    }     
}
