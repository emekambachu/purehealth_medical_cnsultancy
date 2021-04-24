<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - Purehealth Medical Consultancy and Equipments</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset('purehealth_logoonly.png') }}" type="image/x-icon">

    <!-- All css here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-futuraPT.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--  ====== preloader start =============================================  -->
<div id="loading" class="home3">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div>
<!--  preloader-end -->

<!--  ====== header-area-start=======================================  -->
<header>
    <div class="header-area header-area3">
        <div class="header header3 position-absolute pt-30 pb-22 extra-padding-55">
            <div class="container-fluid">
                <div id="header-sticky" class="header-bottom home3-header-bottom">
                    <div class="row align-items-center justify-content-lg-between position-relative">
                        <div class="col-xxl-3 col-xl-2 col-lg-3  col-md-4  col-sm-8 col-8 pr-md-0">
                            <div class="logo-area">
                                <div class="logo3 z-index1 position-relative">
                                    <a href="{{ url('/') }}" class="d-block" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="stepmeds">
                                        <img src="{{ asset('purehealth_logo.png') }}" alt="Purehealth medical consultancy">
                                    </a>
                                </div><!-- /logo -->
                            </div>
                        </div><!-- /col -->
                        <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-1 col-sm-1 col-1 pr-0 pl-0 d-flex align-items-center justify-content-center position-static d-none d-lg-block">
                            <div class="main-menu main-menu-3">
                                <nav id="mobile-menu">
                                    <ul class="d-block">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a class="mr-0" href="{{ url('about') }}">About</a></li>
                                        <li><a class="mr-0" href="{{ url('products') }}">Products</a></li>
                                        <li><a class="mr-0" href="{{ url('services') }}">Services</a></li>
                                        <li><a class="mr-0" href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /main-menu -->
                        </div><!-- /col -->

                        <div class="col-xxl-3 col-xl-3  col-lg-2 col-md-8  col-sm-3 col-4  pl-0 d-flex  align-items-center justify-content-end">
                            <div class="header-right d-flex align-items-center">
                                <ul class="header-account d-none d-md-block pl-25">
                                    <li class="d-none d-md-inline-block">
                                        <a href="" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="My Account"><span><i class="far fa-user-circle"></i></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-compare header-wishlist d-none d-md-block position-relative pl-25">
                                    <li class="d-none d-md-inline-block">
                                        <a href="" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Compare"><span><i class="fal fa-random"></i></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="header-wishlist d-none d-md-block pl-25 position-relative">
                                    <li class="position-relative">
                                        <a href="" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="View wishlist" class="dark-black-color"><span><i class="fal fa-heart"></i></span>
                                            <span class="s-count position-absolute h3-theme-bg text-white text-center">0</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="h-shop position-relative pl-25 d-md-block">
                                    <li class="position-relative">
                                        <ul class="header-cart-wrapper d-flex align-items-center">
                                            <li class="header-shopping-cart cart-item position-relative">
                                                <span class="" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Add to cart"><span class="icon-shopping-bag"></span></span>
                                                <span class="s-count position-absolute  h3-theme-bg text-white text-center">0</span>
                                            </li>
                                        </ul><!-- /header-cart-wrapper -->

                                        <div class="header-shopping-cart-details border-t-gray1 mt-1 position-absolute bg-white pl-30 pr-30 pt-35 pb-60">
                                            <div class="h-shop-cart-contetn pt-20 over-x-hidden over-y-scroll">
                                                <h5 class="mb-30 font500 position-relative hvr3">Your Cart</h5>
                                                <p>No products in the cart.</p>
                                            </div>
                                            <div class="d-sm-flex justify-content-between">
                                                <a data-animation="fadeInUp" data-delay="1.7s" href="#" class="web-btn h2-web-btn mt-25 d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-12 line-height-1 font12">view cart</a>
                                                <a data-animation="fadeInUp" data-delay="1.7s" href="#" class="web-btn h2-web-btn mt-25 d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-12 line-height-1 font12">checkout</a>
                                            </div>
                                        </div><!-- /header-shopping-cart -->
                                    </li>
                                </ul><!-- /h-shop -->
                                <div class="d-block d-lg-none">
                                    <a class="mobile-menubar pt-0 ml-20" href="javascript:void(0);"><span class="icon-menu"></span></a>
                                </div><!-- /mobile-menubar -->
                            </div><!-- /header-right -->
                        </div><!-- /col -->

                    </div><!-- /row -->
                </div><!-- /header-bottom -->
            </div><!-- /container-f -->
        </div><!-- /header -->
    </div><!-- /header-area -->
</header>
<!--  header-area-end  -->

<!--  ====== header extra info start================================== -->
<!-- side-mobile-menu start -->
<div class="side-mobile-menu bg-white pt-20 pb-30 pl-40 pr-40 pb-100 hm3">
    <div class="close-icon d-flex justify-content-end mt-0">
        <a class="close-menu d-block" href="javascript:void(0);"><span class="icon-clear"></span></a>
    </div>

    <div class="mobile-menu mt-10"></div>
    <div class="menu-login pt-10 d-block d-md-none">
        <ul class="header-login d-flex justify-content-between mobile-border-b ">
            <li><a href="">My Account</a></li>
            <li><a href=""><i class="far fa-user-circle"></i></a></li>
        </ul>
        <ul class="header-heart d-flex justify-content-between mobile-border-b">
            <li><a href="">Wishlist</a></li>
            <li><a href=""><span class="icon-heart"></span></a></li>
        </ul>
    </div><!-- /header-right -->


    <h6 class="light-black-color2 font600 mt-30 pb-1 border-primary-b d-inline-block">Contact us</h6>
    <ul class="contact-add mt-20">
        <li class="mb-15 primary-color">
            <span class="pr-1"><i class="fas fa-map-marker-alt"></i></span>
            PO Box 16122 Collins Street Victoria 8007 Australia
        </li>
        <li class="mb-20 primary-color">
            <span class="pr-1"><i class="far fa-envelope"></i></span>
            info@purehealthmedics.com
        </li>
        <li class="mb-15">
            <a class=" primary-color" href="tell:+61480048458">
                <span class="pr-1"><i class="fas fa-phone"></i></span> +61480048458</a>
        </li>
    </ul>
    <ul class="social-link pt-2 mb-150">
        <li class="d-inline-block">
            <a class="active primary-color-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="d-inline-block">
            <a class="primary-color text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="d-inline-block">
            <a class="primary-color text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-instagram"></i></a>
        </li>
    </ul><!-- social-link -->
</div><!-- /side-mobile-menu -->
<div class="body-overlay"></div>
<!-- header extra info end  -->

<!-- header search details start -->
<div class="header-search-details text-center white-bg pt-55 pl-60 pr-60">
    <div class="close-icon d-flex justify-content-end mt-20">
        <a class="close-menu d-block" href="javascript:void(0);"><span class="icon-clear"></span></a>
    </div>
    <div class="header-search-content mt-100 ml-130 mr-130">
        <h3 class="">Search in:</h3>
        <ul class="d-flex justify-content-center mt-25">
            <li><a class="active" href="shop.html">All categories</a></li>
            <li><a href="">Clothing</a></li>
            <li><a href="">Electronics</a></li>
            <li><a href="">Home Accessories</a></li>
            <li><a href="">Best selling product</a></li>
        </ul>
        <form action="#" class="position-relative mt-50">
            <input class="form-control rounded-0 h5-theme-color" type="text" placeholder="Enter Keyword...">
            <a class="position-absolute primary-color d-block" href="#"><span class="icon-search"></span></a>
        </form>
    </div>
</div><!-- /extra-info -->
<!-- header extra info end  -->

<main>
    @yield('contents')
</main>

<!-- ====== footer-area-start ============================================== -->
<footer>
    <div class="footer-area footer3 footer-bg h3-primary-bg position-relative">
        <div class="footer-top">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xxl-3 col-xl-3  col-lg-3  col-md-4  col-sm-6 col-12 footer-r-border">
                        <div class="footer-widget f-adress pb-90 pt-80 pr-100">
                            <img src="{{ asset('purehealth_logo.png') }}" alt="">
                            <p class="pt-18 font13 text-uppercase mt-25">PO Box 16122 Collins Street
                                Victoria 8007 Australia</p>
                            <div class="f-adress-text mt-25">
                                <ul class="footer-address">
                                    <li>
                                        <a class="footer-phone text-white mb-0" href="tell:+61480048458">
                                            +61480048458</a>
                                    </li>
                                    <li class="footer-mail pt-10">
                                        <a href="#" class="text-white font14">info@purehealthmedics.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /col -->
                    <div class="col-xxl-6 col-xl-6  col-lg-6  col-md-8  col-sm-12 col-12 d-sm-flex justify-content-lg-center footer-r-border">
                        <ul class="footer-account pt-80 ">
                            <li>
                                <a href="#" class="position-relative d-inline-block">My Account</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">Order Status</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">Shipping</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">Billing</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">Returns & Exchanges</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">International Shipments</a>
                            </li>
                        </ul>
                        <ul class="footer-account pt-80 ">
                            <li>
                                <a href="#" class="position-relative d-inline-block">Customer Service</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">Contact Us</a>
                            </li>
                            <li>
                                <a href="#" class="position-relative d-inline-block">Accessibility</a>
                            </li>
                        </ul>
                    </div><!-- /col -->
                    <div class="col-xxl-3 col-xl-3  col-lg-3  col-md-12  col-sm-6 col-12 d-flex justify-lg-content-center">
                        <div class="footer-widget f-social pb-30 pt-80 footer-padding-left">
                            <ul class="footer-social-link">
                                <li>
                                    <a class="d-inline-block font13 text-uppercase transition-3 mb-20" href="#">
                                        <span class="d-inline-block h3-theme-bg text-center">
                                            <i class="fab fa-facebook-f"></i></span>Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="d-inline-block font13 text-uppercase transition-3 mb-20" href="#">
                                        <span class="d-inline-block h3-theme-bg text-center">
                                            <i class="fab fa-twitter"></i></span>Twitter
                                    </a>
                                </li>
                                <li>
                                    <a class="d-inline-block font13 text-uppercase transition-3 mb-20" href="#">
                                        <span class="d-inline-block h3-theme-bg text-center">
                                            <i class="fab fa-instagram"></i></span>Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center footer-t-border pt-25">
                    <!-- ====== service-area-start ========================================= -->
                    <div class="col-xl-8  col-lg-8  col-md-12  col-sm-12 col-12">
                        <div class="service-area">
                            <ul>
                                <li class="d-inline-block mr-50">
                                    <div class="single-service d-flex align-items-center mb-25">
                                        <div class="s-ser-icon mr-15">
                                            <span class="theme-color"><i class="fal fa-shipping-fast"></i></span>
                                        </div>
                                        <div class="s-ser-content">
                                            <p class="mb-0">30 Days To Money Back</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mr-50">
                                    <div class="single-service d-flex align-items-center mb-25">
                                        <div class="s-ser-icon mr-15">
                                            <span class="theme-color"><i class="fal fa-tram"></i></span>
                                        </div>
                                        <div class="s-ser-content">
                                            <p class="mb-0">30 Days To Money Back</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mr-50">
                                    <div class="single-service d-flex align-items-center mb-25">
                                        <div class="s-ser-icon mr-15">
                                            <span class="theme-color"><i class="fal fa-gift"></i></span>
                                        </div>
                                        <div class="s-ser-content">
                                            <p class="mb-0">Shipping in 24 Hours</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /col -->
                    <div class="col-xl-4  col-lg-4  col-md-12  col-sm-12 pr-0 col-12 d-flex justify-content-lg-end">
                        <div class="footer-widget f-payment pb-25">
                            <div class="footer-payment">
                                <img src="{{ asset('images/footer/payment.png') }}" alt="">
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <div class="pattern position-absolute left0 bottom0 d-none d-xl-block">
            <img src="{{ asset('images/bg/footer-ptrn.png') }}" alt="">
        </div>
        <div class="f-pattern position-absolute d-none d-xl-block">
            <img src="{{ asset('images/bg/Pattern1.png') }}" alt="">
        </div>
    </div>
</footer>

<!-- back top -->
<div class="scroll-up" id="scroll">
    <a href="#" class="h3-theme-bg white d-block text-center position-fixed">
        <span class="icon-chevrons-up"></span>
    </a>
</div>

<!-- All js here -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.inputarrow.js') }}"></script>
<script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/countdown.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
