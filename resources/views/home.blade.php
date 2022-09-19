<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('frontend/css/style1.css') }}">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- font css  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Fontawesome Icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-lightnew">
        <a id="mob-view" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        <a id="web-view" class="navbar-brand" href=""> <i class="fa fa-bars" aria-hidden="true"></i></a>
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="{{ asset('frontend/images/logo-252x100-1 1.png') }}" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto padd">
                <li class="nav-item active">
                    <div class="dropdown">
                        <div class="input-group mb-3" data-toggle="" aria-expanded="false" id="input-deco">
                            <div class="input-group-prepend">
                                <a style="text-decoration:none;" href="categoreis.html">
                                    <span for="exampleFormControlSelect1" class="input-group-text"
                                        id="inputGroup-sizing-default">All
                                        Categories</span>
                                </a>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="Select" disabled>Select</option>
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
                    <img class="img-fluid" src="{{ asset('frontend/images/Vector.png' ) }}" alt="">
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
    <section class="details-section">
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide banner" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div id="col-imgpad" class="col-xl-8 col-lg-8 col-8">
                                <img id="img-width" class="img-fluid" src="{{ asset('frontend/images/detail1.png') }}" alt="">
                            </div>
                            <div id="col-imgpadright" class="col-xl-4 col-lg-4 col-4">
                                <img id="img-rec" class="img-fluid" src="{{ asset('frontend/images/Rectangle 4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div id="col-imgpad" class="col-xl-8 col-lg-8 col-8">
                                <img id="img-width" class="img-fluid" src="{{ asset('frontend/images/detail1.png') }}" alt="">
                            </div>
                            <div id="col-imgpadright" class="col-xl-4 col-lg-4 col-4">
                                <img id="img-rec" class="img-fluid" src="{{ asset('frontend/images/Rectangle 4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div id="col-imgpad" class="col-xl-8 col-xl-8 col-8">
                                <img id="img-width" class="img-fluid" src="{{ asset('frontend/images/detail1.png') }}" alt="">
                            </div>
                            <div id="col-imgpadright" class="col-xl-4 col-lg-4 col-4">
                                <img id="img-rec" class="img-fluid" src="{{ asset('frontend/images/Rectangle 4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
            <div class="add-det">
                <div class="row">
                    <div id="col-imgpadone" class="col-xl-10 col-lg-10 col-10">
                        <img class="img-fluid hgt" src="{{ asset('frontend/images/Rectangle 5.png') }}" alt="">
                    </div>
                    <div class="col-xl-2 col-lg-2 col-2">
                        <img id="contact-div" class="img-fluid" src="{{ asset('frontend/images/Component 1.png') }}" alt="">
                        <!-- <div id="contact-div" class="conta-det">
                            <h5 class="partner">Partnership or Products</h5>
                            <p class="enquiry">For all your queries!</p>
                            <p class="enqu-cont"> <b>Contact us Now</b> </p>
                            <p class="num">+91 74490 91777</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="add-section">
        <div class="container-fluid">
            <div class="text-left">
                <h5 class="title-head">Point of Care Instruments</h5>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <a href="productdetails.html">
                                                <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            </a>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="product-div">
                                    <div class="d-flex" style="margin-bottom: 15px;">
                                        <span class="featured">FEATURED
                                        </span>
                                        <span class="sale">Sale</span>
                                    </div>
                                     <div class="text-center">
                                  <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                </div>
                                    <div class="card-details">
                                        <a href="productdetails.html">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                        </a>
                                        <p class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="stocks">5 in Stock</span>
                                        </p>
                                        <h6 class="amount">₹250,000
                                            <p class="dis-amt"> <s> ₹280,000</s>
                                            </p>
                                            <span class="stocks-tag">(11% OFF)</span>
                                        </h6>
                                        <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                            included</small>
                                        <span class="addtocart-div">
                                            <p class="text-left fav">Add to Wishlist
                                                <span class="addcart" href="" type="button">Add to Cart</span>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="product-div">
                                    <div class="d-flex" style="margin-bottom: 15px;">
                                        <span class="featured">FEATURED
                                        </span>
                                        <span class="sale">Sale</span>
                                    </div>
                                     <div class="text-center">
                                  <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                </div>
                                    <div class="card-details">
                                        <a href="productdetails.html">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                        </a>
                                        <p class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="stocks">5 in Stock</span>
                                        </p>
                                        <h6 class="amount">₹250,000
                                            <p class="dis-amt"> <s> ₹280,000</s>
                                            </p>
                                            <span class="stocks-tag">(11% OFF)</span>
                                        </h6>
                                        <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                            included</small>
                                        <span class="addtocart-div">
                                            <p class="text-left fav">Add to Wishlist
                                                <span class="addcart" href="" type="button">Add to Cart</span>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
    </section>
    <section class="offer-sec">
        <div class="container-fluid">
            <div class="row">
                <div id="col-imgpadtwo" class="col-xl-8 col-lg-8 col-8">
                    <img class="img-fluid" src="{{ asset('frontend/images/verti1.png') }}" alt="">
                </div>
                <div class="col-xl-4 col-lg-4 col-4">
                    <!-- <div> -->
                    <img id="offer-div" class="img-fluid" src="{{ asset('frontend/images/verti2.png') }}" alt="">
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="Analytical-section">
        <div class="container-fluid">
            <div class="text-left">
                <h5 class="title-head">Analytical Equipments</h5>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="product-div">
                                    <div class="d-flex" style="margin-bottom: 15px;">
                                        <span class="featured">FEATURED
                                        </span>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="text-center">
                                        <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                    </div>
                                    <div class="card-details">
                                        <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                        <p class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="stocks">5 in Stock</span>
                                        </p>
                                        <h6 class="amount">₹250,000
                                            <p class="dis-amt"> <s> ₹280,000</s>
                                            </p>
                                            <span class="stocks-tag">(11% OFF)</span>
                                        </h6>
                                        <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                            included</small>
                                        <span class="addtocart-div">
                                            <p class="text-left fav">Add to Wishlist
                                                <span class="addcart" href="" type="button">Add to Cart</span>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="product-div">
                                    <div class="d-flex" style="margin-bottom: 15px;">
                                        <span class="featured">FEATURED
                                        </span>
                                        <span class="sale">Sale</span>
                                    </div>
                                     <div class="text-center">
                                  <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                </div>
                                    <div class="card-details">
                                        <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                        <p class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="stocks">5 in Stock</span>
                                        </p>
                                        <h6 class="amount">₹250,000
                                            <p class="dis-amt"> <s> ₹280,000</s>
                                            </p>
                                            <span class="stocks-tag">(11% OFF)</span>
                                        </h6>
                                        <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                            included</small>
                                        <span class="addtocart-div">
                                            <p class="text-left fav">Add to Wishlist
                                                <span class="addcart" href="" type="button">Add to Cart</span>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
    </section>
    <section class="lab-section">
        <div class="container-fluid">
            <div class="text-left">
                <h5 class="title-head">Lab Consumables</h5>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="product-div">
                                    <div class="d-flex" style="margin-bottom: 15px;">
                                        <span class="featured">FEATURED
                                        </span>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="text-center">
                                        <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                    </div>
                                    <div class="card-details">
                                        <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                        <p class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="stocks">5 in Stock</span>
                                        </p>
                                        <h6 class="amount">₹250,000
                                            <p class="dis-amt"> <s> ₹280,000</s>
                                            </p>
                                            <span class="stocks-tag">(11% OFF)</span>
                                        </h6>
                                        <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                            included</small>
                                        <span class="addtocart-div">
                                            <p class="text-left fav">Add to Wishlist
                                                <span class="addcart" href="" type="button">Add to Cart</span>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12">
                                <div class="product-div">
                                    <div class="d-flex" style="margin-bottom: 15px;">
                                        <span class="featured">FEATURED
                                        </span>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="text-center">
                                        <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                    </div>
                                    <div class="card-details">
                                        <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                        <p class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="stocks">5 in Stock</span>
                                        </p>
                                        <h6 class="amount">₹250,000
                                            <p class="dis-amt"> <s> ₹280,000</s>
                                            </p>
                                            <span class="stocks-tag">(11% OFF)</span>
                                        </h6>
                                        <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                            included</small>
                                        <span class="addtocart-div">
                                            <p class="text-left fav">Add to Wishlist
                                                <span class="addcart" href="" type="button">Add to Cart</span>
                                            </p>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-12  d-none d-md-block">
                                <div class="">
                                    <div class="product-div">
                                        <div class="d-flex" style="margin-bottom: 15px;">
                                            <span class="featured">FEATURED
                                            </span>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('frontend/images/product 3.png') }}" alt="">
                                        </div>
                                        <div class="card-details">
                                            <h5 class="product-ttle">Ultra smart -Abge analyser</h5>
                                            <p class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="stocks">5 in Stock</span>
                                            </p>
                                            <h6 class="amount">₹250,000
                                                <p class="dis-amt"> <s> ₹280,000</s>
                                                </p>
                                                <span class="stocks-tag">(11% OFF)</span>
                                            </h6>
                                            <small class="tax-det"><i class="fa fa-check" aria-hidden="true"></i>GST
                                                included</small>
                                            <span class="addtocart-div">
                                                <p class="text-left fav">Add to Wishlist
                                                    <span class="addcart" href="" type="button">Add to Cart</span>
                                                </p>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="container-fluid">
            <div class="abt-box">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12" id="abt-deco">
                        <div class="abt-div">
                            <img class="img-fluid" src="{{ asset('frontend/images/abt1.png') }}" alt="">
                            <div class="text-center">
                                <p class="abt-head">Best Quality Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12" id="abt-deco">
                        <div class="abt-div">
                            <img class="img-fluid" src="{{ asset('frontend/images/abt2.png') }}" alt="">
                            <div class="text-center">
                                <p class="abt-head">Fast Delivery</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12" id="abt-deco">
                        <div class="abt-div">
                            <img class="img-fluid" src="{{ asset('frontend/images/abt3.png') }}" alt="">
                            <div class="text-center">
                                <p class="abt-head">Qualified Support Team</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12" id="abt-deco">
                        <div class="abt-div">
                            <img class="img-fluid" src="{{ asset('frontend/images/abt4.png') }}" alt="">
                            <div class="text-center">
                                <p class="abt-head">Competitve Pricing</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-12" id="abt-deco">
                        <div class="abt-div">
                            <img class="img-fluid" src="{{ asset('frontend/images/abt 5.png') }}" alt="">
                            <div class="text-center">
                                <p class="abt-head">14-Day Refund Policy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="trustus">
                <div class="container">
                    <div class="text-center">
                        <h5 class="head-div">Your trusted partner to buy Laboratory Supplies online</h5>
                    </div>
                    <p class="parag">
                        At Quicklab.in, we are committed to offering the best online shopping experience to our
                        customers.
                        So be
                        it best prices on all our brands or an array of top notch products, you can order the top
                        quality
                        Scientific and Business Supplies at affordable prices online. Get exciting deals to empty your
                        wish-list
                        at the largest e-procurement platform and enjoy the best B2B e-commerce experience like never
                        before.
                        All the laboratory products under a single roof, quality assured products and value for money
                        offers
                        make it the biggest B2B marketplace amongst all B2B suppliers. Avail best prices when you shop
                        online at
                        India’s leading B2B E-commerce Portal. Also, get the services of our best Franchisee network in
                        top
                        cities such as Delhi NCR, Mumbai, Chennai, Bengaluru, Kolkata, Chennai, Pune, Jaipur, Hyderabad
                        and
                        Ahmedabad.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <div class="line-div"></div>
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
                                <li>Return & Refunds</li>
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
                                <li>Terms & Conditions</li>
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
                                <span> <img class="img-fluid" src="{{ asset('frontend/images/visa_icon.png') }}" alt=""> </span>
                                <span> <img class="img-fluid" src="{{ asset('frontend/images/paytm_icon.png') }}" alt=""> </span>
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

    <script src=" {{ asset('frontend/js/carousel.js') }}"></script>
    <!-- bootstrap scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <!-- owl-carousel -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script> -->
</body>

</html>