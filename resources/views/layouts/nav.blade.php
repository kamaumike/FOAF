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
                <li class="hidden">
                    <a href="{{ url('/') }}"></a>
                </li>
                <li>
                    <a class="active" href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="#about">About Us</a>
                </li>
                <li>
                    <a href="{{ url('shop') }}">Shop</a>
                </li>
                <li>
                    <a href="{{ url('blog') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>                        
        </div>
        <!-- /.navbar-collapse -->             
    </div>
    <!-- /.container -->
</nav>
<!-- End Header Logo & Naviagtion --> 