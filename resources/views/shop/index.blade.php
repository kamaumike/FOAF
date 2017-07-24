@extends('layouts.master')

@section('title', 'Shop')

@section('content')
    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="text-center color-elements">
                        <h2>Shop</h2> 
                        <img class="img-responsive displayed" src="{{ asset('assets/images/short.png') }}" alt="Company about"/>
                        <br>             
                    </div>
                </div> 
            </div>        

            <div class="row">
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif        

                @foreach ($products->chunk(2) as $items)
                    <div class="row">
                        @foreach ($items as $product)
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <div class="caption text-center">
                                        <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('assets/images/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                        <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                                        <p>{{ $product->price }}</p>
                                        </a>
                                    </div> <!-- end caption -->
                                </div> <!-- end thumbnail -->
                            </div> <!-- end col-md-3 -->
                        @endforeach
                    </div> <!-- end row -->
                @endforeach
            </div>
        </div> <!-- end container -->
    </section>
@endsection