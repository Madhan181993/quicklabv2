<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quicklab') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/uistyle.css') }}" rel="stylesheet">

</head>
<body>

<div class="phone-num">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <span class="numberpadd">+91 74490 91777, +91 74490 92777,+91 74490 93777</span>
                </div>
                <div class="col-4">
                    <span class="partner-b">Become a partner</span>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-md navbar-light bg-lightnew">
        <a id="mob-view" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        <a id="web-view" class="navbar-brand" href=""> <i class="fa fa-bars" aria-hidden="true"></i></a>
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="{{ asset('frontend/images/logo.png') }}" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto padd">
                <li class="nav-item active">
                    <div class="dropdown">
                        <div class="input-group mb-3" data-toggle="" aria-expanded="false" id="input-deco">
                            <div class="input-group-prepend">
                                <a style="text-decoration:none;" href="categoreis.html">
                                    <span for="exampleFormControlSelect1" class="input-group-text" id="inputGroup-sizing-default">All
                                        Categories</span>
                                </a>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="Select" disabled="">Select</option>
                                <option>Point of Care Instruments</option>
                                <option>Analytical Equipments</option>
                                <option>Lab Consumables</option>
                            </select>
                        </div>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="" class="nav-link" id="signin">
                    <img class="img-fluid" src="{{ asset('frontend/images/Vector.png') }}" alt="">
                    <span class="signdeco"> Sign-in</span>
                </a>
                <a id="cartdeco" class="nav-link" href="">
                    <span><img class="img-cart" src="{{ asset('frontend/images/cart_icon.png') }}" alt="">CART</span>
                    <span class="count">0
                    </span> <br>
                    <span class="items">ITEMS</span>
                </a>
                <a class="nav-link">
                    <small class="items">ITEMS
                        <span class="itemcount">0</span>
                    </small> <br>
                    <span class="wallet">WALLET</span>
                </a>
            </form>
        </div>
    </nav>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li>
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="foot-section">
        <div class="container text-center">
            <h6 class="social-ttle">Connect with Us</h6>
            <div class="social-icon">
                <img id="social" class="img-fluid" src="{{ asset('frontend/images/fb_icon.png') }}" alt="">
                <img id="social" class="img-fluid" src="{{ asset('frontend/images/twitter_icon.png') }}" alt="">
                <img id="social" class="img-fluid" src="{{ asset('frontend/images/insta_icon.png') }}" alt="">
            </div>
            <div class="line-white"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-3">
                        <div class="text-left">
                            <h6 class="foot-ttle">Company</h6>
                            <ul class="desc">
                                <li>Categories</li>
                                <li>Contact Us</li>
                                <li>Special Offers</li>
                                <li>Featured Products</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3">
                        <div class="text-left">
                            <h6 class="foot-ttle">Help</h6>
                            <ul class="desc">
                                <li>FAQ</li>
                                <li>Shipping</li>
                                <li>Return &amp; Refunds</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3">
                        <div class="text-left">
                            <h6 class="foot-ttle">About</h6>
                            <ul class="desc">
                                <li>Company</li>
                                <li>Team</li>
                                <li>Locations</li>
                                <li>Terms &amp; Conditions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-3">
                        <div class="text-left">
                            <h6 class="foot-ttle">Connect</h6>
                            <ul class="desc">
                                <li>Job Openings</li>
                                <li>Employee Sucess</li>
                                <li>Benefits</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-white"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="float-right">
                            <div class="payment">
                                Payment options
                                <span> <img class="img-fluid" src="{{ asset('frontend/images/paytm_icon.png') }}" alt=""> </span>
                                <span> <img class="img-fluid" src="{{ asset('frontend/images/visa_icon.png') }}" alt=""> </span>
                                <span> <img class="img-fluid" src="{{ asset('frontend/images/master_icon.png') }}" alt=""> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<div class="foot-div">
        <p class="text-center Copyright">
            <i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2022 : Quicklab Services. All rights reserved.
        </p>
    </div>
        <!-- Scripts -->
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>

</body>
</html>
