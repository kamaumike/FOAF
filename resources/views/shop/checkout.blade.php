@extends('layouts.master')

@section('title', 'Checkout')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/gsi-step-indicator.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tsf-step-form-wizard.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/parsley.css') }}">

    <style type="text/css">
        .backpack.dropzone {
            font-family: 'SF UI Display', 'Segoe UI';
            font-size: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 250px;
            height: 150px;
            font-weight: lighter;
            color: white;
            will-change: right;
            z-index: 2147483647;
            bottom: 20%;
            background: #333;
            position: fixed;
            user-select: none;
            transition: left .5s, right .5s;
            right: 0px; 
        }

        .backpack.dropzone .animation {
            height: 80px;
            width: 250px;
            background: url("//sxt.cdn.skype.com/assets/dropzone/hoverstate.png") left center; 
        }

        .backpack.dropzone .title::before {
            content: 'Save to'; 
        }

        .backpack.dropzone.closed {
            right: -250px; 
        }

        .backpack.dropzone.hover .animation {
            animation: sxt-play-anim-hover 0.91s steps(21);
            animation-fill-mode: forwards;
            background: url("//sxt.cdn.skype.com/assets/dropzone/hoverstate.png") left center; 
        }

        @keyframes sxt-play-anim-hover {
        from {
            background-position: 0px; 
        }
        to {
            background-position: -5250px; 
        }}

        .backpack.dropzone.saving .title::before {
            content: 'Saving to'; 
        }

        .backpack.dropzone.saving .animation {
            background: url("//sxt.cdn.skype.com/assets/dropzone/saving_loop.png") left center;
            animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

        @keyframes sxt-play-anim-saving {
        100% {
            background-position: -14750px; 
        } }

        .backpack.dropzone.saved .title::before {
            content: 'Saved to'; 
        }

        .backpack.dropzone.saved .animation {
            background: url("//sxt.cdn.skype.com/assets/dropzone/saved.png") left center;
            animation: sxt-play-anim-saved steps(20) 0.83s forwards; 
        }

        @keyframes sxt-play-anim-saved {
        100% {
            background-position: -5000px; 
        } }
    </style>

@endsection

@section('content')

    <div class="demo-settings" data-open="true">
        <div class="settings-main">
            <label>Step effect</label>
            <select class="form-control" id="stepEffect">
                <option value="basic" selected="selected">basic</option>
                <option value="bounce">bounce</option>
                <option value="slideRightLeft">slideRightLeft</option>
                <option value="slideLeftRight">slideLeftRight</option>

                <option value="flip">flip</option>
                <option value="transformation">transformation</option>
                <option value="slideDownUp">slideDownUp</option>
                <option value="slideUpDown">slideUpDown</option>
            </select>
            <br />
            <label for="stepTransition">
                Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked />
            </label>
            <br />
            <label for="showButtons">
                Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked />
            </label>
            <br />
            <label for="showStepNum">
                Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked />
            </label>            
        </div>
    </div>

    <section id="checkout">
        <div class="container">
            <div class="row">                
                <h1>Checkout</h1>
            </div>
            <div class="row">                
                <!-- BEGIN STEP FORM WIZARD -->
                <div class="tsf-wizard tsf-wizard-1 top" data-step-effect="default-effect" data-step-index="3">
                    <!-- BEGIN NAV STEP-->
                    <div class="tsf-nav-step">
                        <!-- BEGIN STEP INDICATOR-->
                        <ul class="gsi-step-indicator triangle gsi-style-2  gsi-transition ">
                            <li class="current" data-target="step-1">
                                <a href="#">
                                    <span class="number">1.</span>
                                    <span class="desc">
                                        <label>Your Address <i class="fa fa-home"></i></label>
                                        <span>Details of your address</span>
                                    </span>
                                </a>
                            </li>
                            <li data-target="step-2">
                                <a href="#">
                                    <span class="number">2.</span>
                                    <span class="desc">
                                        <label>Shipping <i class="fa fa-truck"></i></label>
                                        <span>Select a shipment method</span>
                                    </span>
                                </a>
                            </li>
                            <li data-target="step-3" class="">
                                <a href="#">
                                    <span class="number">3.</span>
                                    <span class="desc">
                                        <label>Order Summary <i class="fa fa-tasks"></i></label>
                                        <span>Details of your order</span>
                                    </span>
                                </a>
                            </li>                                                        
                            <li data-target="step-4">
                                <a href="#">
                                    <span class="number">4. </span>
                                    <span class="desc">
                                        <label>Payment <i class="fa fa-credit-card"></i></label>
                                        <span>Select a payment method</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- END STEP INDICATOR-->
                    </div>
                    <!-- END NAV STEP-->
                    <!-- BEGIN STEP CONTAINER -->

                    <div class="tsf-container">
                        <!-- BEGIN CONTENT-->
                        <div class="tsf-content">
                            <!-- BEGIN STEP 1-->
                            <div class="tsf-step step-1 active">
                                <fieldset>
                                    <legend>Please provide details of your address</legend>

                                    <div class="row">
                                        <!-- BEGIN STEP CONTENT-->
                                        <form class="tsf-step-content" action="#">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">Name </label>
                                                    <input type="email" class="form-control" id="name" placeholder="Your name " readonly="readonly" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Your email" readonly="readonly" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone" placeholder="Your phone number" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="county">County</label>                        
                                                    <select class="form-control" id="county" required>
                                                        <option>Please select your County...</option>
                                                        <option>Nairobi</option>
                                                        <option>Mombasa</option>
                                                        <option>Kisumu</option>    
                                                    </select>                                                   
                                                </div>
                                                <div class="form-group">
                                                    <label for="region">Town/Region</label>                        
                                                      <select class="form-control" id="region" required>
                                                        <option>Please select your Town/Region...</option>
                                                        <option>Ngong</option>
                                                        <option>Karen</option>
                                                        <option>Kitisuru</option>
                                                        <option>Muthaiga</option>                                         
                                                      </select>                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Delivery Address (Optional)</label>
                                                    <textarea class="form-control" id="address" rows="4" placeholder="Additional info for precise delivery e.g next to XYZ building" required></textarea>                           
                                                </div>                                      
                                            </div>                                            
                                        </form>
                                        <!-- END STEP CONTENT-->
                                    </div>

                                </fieldset>
                            </div>
                            <!-- END STEP 1-->

                            <!-- BEGIN STEP 2-->
                            <div class="tsf-step step-2">
                                <fieldset>
                                    <legend>Select a shipment method</legend>
                                    <!-- BEGIN STEP CONTENT-->
                                    <form class="tsf-step-content" action="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option1" checked="" required="">
                                                Home/Office delivery (You will incurr an additional cost of Ksh: 500/= )
                                            </label>
                                        </div>

                                        <legend>Collect from a pick up station</legend>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option2">
                                                G4S
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option2">
                                                Easy Coach
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option2">
                                                2NK
                                            </label>
                                        </div>                                       
                                    </form>
                                    <!-- END STEP CONTENT-->
                                </fieldset>
                            </div>
                            <!-- END STEP 2-->

                            <!-- BEGIN STEP 3-->
                            <div class=" tsf-step step-3 ">
                                <fieldset>
                                    <legend>Your order</legend>
                                    <!-- BEGIN STEP CONTENT-->
                                    @if (sizeof(Cart::content()) > 0)

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="table-image"></th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th class="column-spacer"></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach (Cart::content() as $item)
                                                <tr>
                                                    <td class="table-image"><a href="{{ url('shop', [$item->model->slug]) }}"><img src="{{ asset('assets/images/' . $item->model->image) }}" alt="product" class="img-responsive cart-image">{{ $item->image }}</a></td>
                                                    <td><a href="{{ url('shop', [$item->model->slug]) }}">{{ $item->name }}</a></td>
                                                    <td>
                                                        <select class="quantity" data-id="{{ $item->rowId }}">
                                                            <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                                            <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                                            <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                                            <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                                            <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                                        </select>
                                                    </td>
                                                    <td>${{ $item->subtotal }}</td>                                                                    
                                                </tr>

                                                @endforeach
                                                <tr>
                                                    <td class="table-image"></td>
                                                    <td></td>
                                                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                                                    <td>${{ Cart::instance('default')->subtotal() }}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="table-image"></td>
                                                    <td></td>
                                                    <td class="small-caps table-bg" style="text-align: right">Tax</td>
                                                    <td>${{ Cart::instance('default')->tax() }}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr class="border-bottom">
                                                    <td class="table-image"></td>
                                                    <td style="padding: 40px;"></td>
                                                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                                                    <td class="table-bg">${{ Cart::total() }}</td>
                                                    <td class="column-spacer"></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    @endif

                                    <!-- END STEP CONTENT-->
                                </fieldset>
                            </div>
                            <!-- END STEP 3-->
                            <!-- BEGIN STEP 4-->
                            <div class="tsf-step step-4">
                                <fieldset>
                                    <legend>Select a payment method</legend>
                                    <!-- BEGIN STEP CONTENT-->

                                    <a href="{{ url('/payment/paypal') }}" class="btn btn-primary btn-lg side-by-side">Paypal</a>
                                    <a href="{{ url('/payment/m-pesa') }}" class="btn btn-primary btn-lg side-by-side">M-Pesa</a> 

                                    <!-- END STEP CONTENT-->
                                </fieldset>
                            </div>
                            <!-- END STEP 4-->

                        </div>
                        <!-- END CONTENT-->
                        <!-- BEGIN CONTROLS-->
                        <div class="tsf-controls">
                            <!-- BEGIN PREV BUTTTON-->
                            <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                                <i class="fa fa-chevron-left"></i> PREV
                            </button>
                            <!-- END PREV BUTTTON-->
                            <!-- BEGIN NEXT BUTTTON-->
                            <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn">
                                NEXT <i class="fa fa-chevron-right"></i>
                            </button>
                            <!-- END NEXT BUTTTON-->                            
                        </div>
                        <!-- END CONTROLS-->
                    </div>
                    <!-- END STEP CONTAINER -->


                </div>
                <!-- END STEP FORM WIZARD -->
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

@endsection

@section('custom-js')    

    <script src="{{ asset('assets/js/demo.js') }}"></script>    

    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>  

    <script src="{{ asset('assets/js/tsf-wizard-plugin.js') }}"></script>  

    <script>

        $(function () {
            pageLoadScript();
        });

        // Form transitions
        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style2';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');



            $('.tsf-wizard-1').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'top',
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: 'auto'
            });
        }
        
    </script>

@endsection