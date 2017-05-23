@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                <div class="text-center color-elements">
                    <h2>Friends of Allamano Foundation</h2>
                </div>
            </div>  
		</div>

		<div class="row">			
			<p><strong>Customer's Name: </strong>{{ $contact->name }}</p>
			<p><strong>Customer's Email: </strong>{{ $contact->email }}</p>
			<hr>
		</div>

		<div class="row">
			<p><strong>Customer's Message: </strong>{{ $contact->message }}</p>
		</div>		
	</div>

@endsection