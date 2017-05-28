@extends('layouts.master')

@section('title', 'Contact Us')

@section('content') 
    <section id="contact">
        <div class="container"> 
           <div class="col-lg-12">
                <div class="text-center color-elements">
                    <h2>Contact Us</h2>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-6">
                    <form class="form" method="post" action="/contact">

                        {{ csrf_field() }}
                        
                        <div class="form-group"><br>
                            <h4>Please fill in the form below to contact us.</h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 form-group">  
                                <input class="form-control custom-labels" type="text" name="name" placeholder="Your name" required autofocus>
                            </div>                   
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 form-group">  
                                <input class="form-control custom-labels" type="email" name="email" placeholder="Your email" required autofocus>
                            </div>                    
                        </div> 

                        <br>               

                        <div class="row">
                            <div class="col-lg-12 col-md-12 form-group">      
                                <textarea class="form-control custom-labels" type="text" name="message" placeholder="Your message" required autofocus></textarea>
                            </div>                   
                        </div>

                        <br>                              

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                        </div>                
                    </form>                    
                </div><!-- col-md-6 -->

                <div class="col-md-5 col-md-offset-1">                          
                    <h3>Working Hours</h3> 

                    <p style="padding-left: 35px;"><i class="fa fa-clock-o fa-fw"></i><strong>Mon - Fri:</strong> 08:00 - 17:00 hrs <strong>(EAT)</strong></p>
                    <p style="padding-left: 35px;"><i class="fa fa-clock-o fa-fw"></i><strong>Sat:</strong> 08:00 - 13:00 hrs <strong>(EAT)</strong></p>                    

                    <h3>Contact Information</h3>

                    <p style="padding-left: 35px;"><i class="fa fa-phone"></i>+254 *** ***</p>
                    <p style="padding-left: 35px;"><i class="fa fa-envelope"></i>info@friendsofallamanofoundation.co.ke</p>
                </div><!-- col-md-5 -->        
            </div><!-- row -->
            <br><br>
        </div><!-- container -->
    </section>
@endsection