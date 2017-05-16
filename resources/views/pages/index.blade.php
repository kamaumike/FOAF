@extends('layouts.master')

@section('title', 'Home')

@section('content')	
	<!-- Header Carousel -->
	<header id="home" class="carousel slide">
		<ul class="cb-slideshow">
			<li><span>image-1</span>
				<div class="container">							
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center"><h3>Friends Of Allamano Foundation</h3></div>
						</div>
					</div>
					<h4>WELCOME TO</h4>
				</div>
			</li>
			<li><span>image-2</span>
				<div class="container">					
					<h4>Changing negative attitudes &amp; perceptions on Persons with Disabilities</h4>
					
				</div>
			</li>
			<li><span>image-3</span>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center"><h3>Discover ancient dark practices</h3></div>
						</div>
					</div>																	
				</div>
			</li>
			<li><span>image-4</span>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="text-center"><h3>The future for Persons with Disabilities</h3></div>
						</div>
					</div>	
					<h4>&amp;</h4>					
				</div>
			</li>
			<li><span>image-5</span>
				<div class="container">																	
					<h5><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Buy Now!</a></h5>										
				</div>
			</li>												
		</ul>
		<div class="intro-scroller">
			<a class="inner-link" href="#about">
				<div class="mouse-icon" style="opacity: 1;">
					<div class="wheel"></div>
				</div>
			</a> 
		</div>          
	</header>
		
	<!-- Page Content -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="text-center">
						<h2>About Us</h2>
						<img class="img-responsive displayed" src="{{ asset('assets/images/short.png') }}" alt="Company about"/>
						<div class="row">
							<div class="col-md-12">
								<p>
								The Friends Of Allamano Foundation is a non-profit disability outreach initiative aimed at disseminating,sharing knowledge and information on persons with physical and intellectual disabilities.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection