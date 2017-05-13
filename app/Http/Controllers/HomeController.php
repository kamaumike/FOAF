<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the Home page. 
     *
     * @return Response
     */

    public function index(){
    	return view('pages.index');
    } 
}
