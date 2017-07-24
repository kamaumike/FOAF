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
					<h5><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom" href="{{ url('shop') }}"> Buy Now!</a></h5>										
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

	<section id="services">
		<div class="orangeback">
			<div class="container">
				<div class="text-center homeport2"><h2>WHAT WE DO</h2></div>
				<div class="row">
					<div class="col-md-12 homeservices1">
						<div class="col-md-4 portfolio-item">
							<div class="text-center">
								<a href="javascript:void(0);">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-search fa-stack-1x"></i>
								</span>
								</a>
								<h3><a href="#">Research</a></h3>
								<p>We research on types of mental and physical disabilities, causes of disabilities, possible treatment &amp; prevention measures, challenges faced by persons with disabilities &amp; solutions to these challenges.</p>
							</div>
						</div>
						<div class="col-md-4 portfolio-item">
							<div class="text-center">
								<a href="javascript:void(0);">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-bullhorn fa-stack-1x"></i>
								</span>
								</a>
								<h3><a href="#">Disability Awareness</a></h3>
								<p>We create disability awareness through blogs, monthly newsletters, organizing visits to institutions of persons with disabilities,holding events on persons with disabilities(PWDs) &amp; selling books on disability issues.These channels will "Hatch" informed minds &amp; humane perspectives towards persons with disabilities.</p>
							</div>
						</div>
						<div class="col-md-4 portfolio-item">
							<div class="text-center">
								<a href="javascript:void(0);">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-wheelchair fa-stack-1x"></i>
								</span>
								</a>
								<h3><a href="#">Support the Disabled</a></h3>
								<p>Friends Of Allamano Foundation is at the forefront of improving the lives of persons with disabilities(PWDs) through advocating civil and educational rights of PWDs, selling walking aids(wheelchairs,clutches).</p>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection