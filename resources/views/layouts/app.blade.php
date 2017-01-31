<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HighRollers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HighRollers" />
    <meta name="keywords" content="HighRollers Bandung, HighRollers Distro, HighRollers Reseller, Prasetyo Wildan Aulia, Top Distro Bandung, Bandung Distro" />
    <meta name="author" content="mr.pwa" />


    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('src/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('src/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('src/css/flexslider.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('src/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('src/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <!--<script src="{{ asset('src/js/respond.min.js') }}"></script>-->
    {{--<![endif]-->--}}

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-2">
                    <div id="fh5co-logo">
                        <a href="/"><img src="{{ asset('src/images/logo.jpg') }}" alt="HighRollers" width="30%" height="30%"></a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 text-center menu-1">
                    <ul>
                        {{--<li class="has-dropdown">--}}
                            {{--<a href="product.html">Products</a>--}}
                            {{--<ul class="dropdown">--}}
                                {{--<li><a href="single.html">Single Shop</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li><a href="{{ url('products') }}">Products</a></li>
                        {{--<li class="has-dropdown">--}}
                            {{--<a href="services.html">Services</a>--}}
                            {{--<ul class="dropdown">--}}
                                {{--<li><a href="#">Web Design</a></li>--}}
                                {{--<li><a href="#">eCommerce</a></li>--}}
                                {{--<li><a href="#">Branding</a></li>--}}
                                {{--<li><a href="#">API</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="contact.html">Contact</a></li>--}}
                    </ul>
                </div>
                <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                    <ul>
                        <li class="search">
                            <div class="input-group">
                                <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
                            </div>
                        </li>
                        {{--<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>--}}
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="has-dropdown">
                                <a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown">
                                    {{--<li><a href="single.html">Single Shop</a></li>--}}
                                    @if(Auth::user()->hasRole('Admin'))
                                        <li><a href="{{ url('admin') }}">Go To Admin Page</a></li>
                                    @endif
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    @yield('content')

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{ asset('src/js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('src/js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('src/js/jquery.waypoints.min.js') }}"></script>
<!-- Carousel -->
<script src="{{ asset('src/js/owl.carousel.min.js') }}"></script>
<!-- countTo -->
<script src="{{ asset('src/js/jquery.countTo.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('src/js/jquery.flexslider-min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('src/js/main.js') }}"></script>

</body>
</html>

