<!-- Start  Logo & Naviagtion  -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Start Toggle Navigation For Mobile display -->
        <div class="navbar-header">             
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">                 
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>                    
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="company logo" /></a>           
        </div>
        <!-- End Toggle Navigation For Mobile display -->

        <!-- Start collecting the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
            <ul class="nav navbar-nav navbar-right custom-menu">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="hidden"><a href="{{ url('/') }}"></a></li>                    
                    <li><a class="active" href="{{ url('/') }}">Home</a></li> 
                    <li><a href="{{ url('shop') }}">Shop</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('shopping-cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Cart</a></li>                
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                      <ul class="dropdown-menu">                       
                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
                      </ul>
                    </li>                    
                @else
                    <li><a class="active" href="{{ url('/') }}">Home</a></li> 
                    <li><a href="{{ url('shop') }}">Shop</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('shopping-cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Cart</a></li>       
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif                
            </ul>                        
        </div><!-- /.navbar-collapse -->             
    </div><!-- /.container -->
</nav><!-- End Header Logo & Naviagtion --> 