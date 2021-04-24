@extends('layout')

@section('title')
    About us
@endsection

@section('contents')

    <div class="single-slider page-height3 d-flex align-items-center" data-background="images/bg/purchased-item-bg.jpg" style="background-image: url(&quot;{{ asset('images/bg/purchased-item-bg.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10 text-white">About us</h2>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

    <!-- ====== Featured-Product-area-start ========================================= -->
    <div class="off-banner-area pt-60 mb-30 hm3">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xxl-6 col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12 pb-15">
                    <div class="section-title mb-50">
                        <h3 class="font-pt pb-1 pr-50 mb-40">
                            <span style="color: #3DBEBD">About us</span>
                        </h3>
                        <p class="light-black-color7 font500 pb-10">
                            <strong>We offer reasonable pricing packages, insurance packages to clients.</strong><br><br>

                            We are a leading supplier of pre-engineered and prefabricated overhead healthcare technologies and solutions. Our systems safely and easily attach state-of-the-art medical equipment such as surgical and exam lights, microscopes, monitors, cameras, equipment management systems and anesthesia booms to an overhead building structure.<br><br>
                            Each one of our products are is easily installed without special tools, field welding, or fabrication. They are field adjustable, repositionable, and meet or exceed the exacting deflection requirements of the ceiling-suspended equipment. Our standard mounting configuration, size range, and attachment components accommodate most applications, since we work directly with medical equipment suppliers, end-users, architects, engineers, and general contractors to insure a properly specified and installed system. For unique configurations, we provide custom-engineered structures.
                        </p>
                    </div><!-- /section-title -->
                </div><!-- /col -->
                <div class="col-xxl-6 col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12 position-relative">
                    <div class="off-banner-area mb-50 pl-40 wow fadeInRight animated pr-60" data-wow-duration="1.5s" >
                        <img class="width100" src="{{ asset('images/banner/home3/off-banner1.jpg') }}" alt="">
                    </div>
                    <div class="b-pattern2 position-absolute">
                        <img src="{{ asset('images/bg/Pattern-banner.png') }}" alt="">
                    </div>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- Featured-Product-area-end  -->


    <!-- ====== Featured-Product-area-start ========================================= -->
    <div class="Featured-product-area mb-30 hm3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                    <div class="section-title pt-10 text-center">
                        <h3 class="font-pt light-black-color2 pb-1">Featured Services</h3>
                    </div><!-- /section-title -->
                </div><!-- /col -->
                <div class="row h3-purchased-product-active white-bg">

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-6 col-12 plr-14">
                        <div class="single-product mb-10">
                            <div class="single-product-img position-relative over-hidden">
                                <div class="most-purchased-item-img  position-relative text-center">
                                    <a class="position-relative d-block" href="">
                                        <img width="200" src="{{ asset('icons/defibrillator.png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="single-product-info text-center transition-3">
                                    <h6 class="light-black-color2">
                                        <a href="">Ophthalmology</a></h6>
                                </div>
                            </div><!-- /single-product-img -->
                        </div><!-- /single-product -->
                    </div><!-- /col -->

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-6 col-12 plr-14">
                        <div class="single-product mb-10">
                            <div class="single-product-img position-relative over-hidden">
                                <div class="most-purchased-item-img  position-relative text-center">
                                    <a class="position-relative d-block" href="">
                                        <img width="200" src="{{ asset('icons/stethoscope.png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="single-product-info text-center transition-3">
                                    <h6 class="light-black-color2">
                                        <a href="">Health Diagnosis</a></h6>
                                </div>
                            </div><!-- /single-product-img -->
                        </div><!-- /single-product -->
                    </div><!-- /col -->

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-6 col-12 plr-14">
                        <div class="single-product mb-10">
                            <div class="single-product-img position-relative over-hidden">
                                <div class="most-purchased-item-img  position-relative text-center">
                                    <a class="position-relative d-block" href="">
                                        <img width="200" src="{{ asset('icons/first-aid-kit(1).png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="single-product-info text-center transition-3">
                                    <h6 class="light-black-color2">
                                        <a href="">Medical Supplies</a></h6>
                                </div>
                            </div><!-- /single-product-img -->
                        </div><!-- /single-product -->
                    </div><!-- /col -->

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-6 col-12 plr-14">
                        <div class="single-product mb-10">
                            <div class="single-product-img position-relative over-hidden">
                                <div class="most-purchased-item-img  position-relative text-center">
                                    <a class="position-relative d-block" href="">
                                        <img width="200" src="{{ asset('icons/surgery-lamp.png') }}" alt="product">
                                    </a>
                                </div>
                                <div class="single-product-info text-center transition-3">
                                    <h6 class="light-black-color2">
                                        <a href="">Care Management</a></h6>
                                </div>
                            </div><!-- /single-product-img -->
                        </div><!-- /single-product -->
                    </div><!-- /col -->

                </div><!-- /row -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- Featured-Product-area-end  -->

    <!-- ====== product-off-banner-area-start ========================================= -->
    <div class="weekly-deal-area hm3" >
        <div class="container">

            <div class="row">
                <div class="col-xxl-12 col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-10">
                    <div class="section-title weekly-deal d-sm-flex align-items-center justify-content-center">
                        <h3 class="font-pt light-black-color2 pt-15 pr-10">Most requested products for the week</h3>
                        <div class="countdown-time countdown-time2 pt-15 d-flex">
                            <div class="timer">
                                <div class="d-flex" data-countdown="2021/5/17"></div>
                            </div>
                        </div><!-- /countdown-time -->
                    </div><!-- /section-title -->
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="h3-theme-border2 mt-25 pb-15">
                <div class="row h3-weekly-deal-active  pt-20 mlr-1 pl-10">
                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home2/product5.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Coneco Product Sample</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->
                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home2/product6.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Black Fashion Zapda</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->
                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home2/product7.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Georgeous White Dresses</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->

                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb35">
                            <div class="single-handpick-item-img position-relative">
                                <div class="single-product-label text-label position-absolute theme-bg text-center  transition-3 z-index1">
                                    <span class="white d-block font500">New</span>
                                </div><!-- /product-label -->
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home2/product8.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Fixair Product Sample</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->

                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home3/product9.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Surgical Face Disinfection</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->

                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home2/product6.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Bifunctional Scale X200</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->

                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/product/home2/product7.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Black Fashion Zapda</a></h6>
                                    <ul class="product-action d-flex">
                                        <li>
                                            <a href="{{ url('request/product') }}" class="d-inline-block gray-bg bor-radius5 light-black-color9 plr-32 font14 font600 mr-6">Request Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /single-handpick-item -->
                    </div><!-- /col -->

                </div><!-- /row -->
            </div>
        </div><!-- /container -->
    </div>
    <!-- product-off-banner-area-end  -->


    <!-- ====== most-purchased-item-area-start================================ -->
    <div class="most-purchased-item-area most-purchased-item-bg2 hm3 over-hidden pt-100 pb-130"
         data-background="{{ asset('images/bg/purchased-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-9 col-lg-10  col-md-12  col-sm-12 col-12 offset-xxl-3 offset-xl-3 offset-lg-2">
                    <div class="most-purchased-item-wrapper wow fadeInRight animated" data-wow-duration="1.5s">
                        <h3 class="font-pt text-white pb-1">Why Choose Us</h3>

                        <div class="pl-15 pr-15">
                            <div class="row most-purchased-item-active white-bg mt-25 bor-radius5 p-3">

                                <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                    <div class="single-product mb-1">
                                        <div class="single-product-img position-relative over-hidden">
                                            <a class="position-relative d-block" href="">
                                                <img width="80" src="{{ asset('icons/customer.png') }}" alt="product">
                                            </a>
                                            <div class="single-product-info text-center transition-3">
                                                <h6 class="light-black-color2" style="color: #3DBEBD;">Patient Oriented</h6>
                                                <p>While our team brings important experience and knowledge, we know that each customer is the expert in their own life</p>
                                            </div>
                                        </div><!-- /single-product-img -->
                                    </div><!-- /single-product -->
                                </div><!-- /col -->

                                <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                    <div class="single-product mb-1">
                                        <div class="single-product-img position-relative over-hidden">
                                            <a class="position-relative d-block" href="">
                                                <img width="80" src="{{ asset('icons/medical-equipment.png') }}" alt="product">
                                            </a>
                                            <div class="single-product-info text-center transition-3">
                                                <h6 class="light-black-color2" style="color: #3DBEBD;">Comprehensive</h6>
                                                <p>We offer comprehensive health care facilities for various medical conditions, at all ages and stages of life</p>
                                            </div>
                                        </div><!-- /single-product-img -->
                                    </div><!-- /single-product -->
                                </div><!-- /col -->

                                <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                    <div class="single-product mb-1">
                                        <div class="single-product-img position-relative over-hidden">
                                            <a class="position-relative d-block" href="">
                                                <img width="80" src="{{ asset('icons/ecg.png') }}" alt="product">
                                            </a>
                                            <div class="single-product-info text-center transition-3">
                                                <h6 class="light-black-color2" style="color: #3DBEBD;">New Technology</h6>
                                                <p>We have flexible hours and are open on certain evenings and during the weekend, to accommodate your schedule</p>
                                            </div>
                                        </div><!-- /single-product-img -->
                                    </div><!-- /single-product -->
                                </div><!-- /col -->

                                <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                    <div class="single-product mb-1">
                                        <div class="single-product-img position-relative over-hidden">
                                            <a class="position-relative d-block" href="">
                                                <img width="80" src="{{ asset('icons/tech-support.png') }}" alt="product">
                                            </a>
                                            <div class="single-product-info text-center transition-3">
                                                <h6 class="light-black-color2" style="color: #3DBEBD;">26 Years of Experience</h6>
                                                <p>While our team brings important experience and knowledge, we know that each patient is the expert in their own life</p>
                                            </div>
                                        </div><!-- /single-product-img -->
                                    </div><!-- /single-product -->
                                </div><!-- /col -->

                            </div><!-- /row -->
                        </div>
                    </div><!-- /most-purchased-item-wrapper -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- most-purchased-item-area-end  -->

    <!-- ====== Featured-Product-area-start ========================================= -->
    <div class="off-banner-area pt-55 mb-45 hm3">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12  col-sm-12 col-12 pl-0 ">
                    <div class="off-banner-area mb-50 wow fadeInLeft animated banner-space" data-wow-duration="1.5s">
                        <img class="width100" src="{{ asset('images/banner/home3/off-banner2.jpg') }}" alt="">
                    </div>
                </div><!-- /col -->
                <div class="col-xxl-4 col-xl-4  col-lg-4  col-md-12  col-sm-12 col-12 pb-15 pl-0 d-flex align-items-center justify-content-center">
                    <div class="subscribe-wrapper subscribe-wrapper3 wow fadeInRight animated" data-wow-duration="1.5s">
                        <div class="section-title mb-25">
                            <h3 class="font-pt light-black-color2 mb-20" style="color: #3DBEBD;">Interested in our products?</h3>
                            <p class="light-black-color7 font300"><strong>Call: +61480048458</strong></p>
                            <a data-animation="fadeInUp" data-delay="1.7s" href="{{ url('contact') }}" class="web-btn h3-web-btn  d-inline-block text-uppercase white h3-theme-bg position-relative over-hidden pl-30 pr-30 ptb-17 shop-collection-btn">
                                More about us</a>
                        </div><!-- /section-title -->
                    </div>
                </div><!-- /col -->
            </div><!-- /row -->
            <div class="b-pattern position-absolute top0">
                <img src="{{ asset('images/bg/Pattern-banner.png') }}" alt="">
            </div>
        </div><!-- /container -->
    </div>
    <!-- Featured-Product-area-end  -->


    <!-- ====== testimonial-area-start ========================================= -->
    <div class="testimonial-area testimonial-area3 hm3" >
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h3 class="font-pt light-black-color2 pb-1">What Clients Says</h3>
                    </div><!-- /section-title -->
                </div><!-- /col -->
            </div>
            <div class="testimonial-area home3-testimonial-active pb-110 pt-25">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-4  col-md-4  col-sm-3 col-12 pr-0 pt-6 d-flex justify-sm-content-end justify-content-center">
                        <div class="testimonial-avater position-relative">
                            <img src="{{ asset('images/bg/client-avater.png') }}" alt="">
                            <div class="quote position-absolute">
                                <span class="h3-theme-bg white d-block text-center"><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div><!-- /testimonial-abater -->
                    </div><!-- /col -->
                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-9 col-12 pl-0  pt-6">
                        <div class="testimonial-comment pt-20 pr-50">
                            <p class="light-black-color7">Awesome customer service, would love to purchase from them again.</p>
                            <div class="testimonial-info d-sm-flex align-items-center pt-20">
                                <h5 class="font600 light-black-color2 pr-10">Jennifer Lopaz</h5>
                                <span class="h3-theme-color">Sr. Orthopedic</span>
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-4  col-md-3  col-sm-3 col-12 pr-0 pt-6 d-flex justify-sm-content-end justify-content-center">
                        <div class="testimonial-avater position-relative">
                            <img src="{{ asset('images/bg/avater2.png') }}" alt="">
                            <div class="quote position-absolute">
                                <span class="h3-theme-bg white d-block text-center"><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div><!-- /testimonial-abater -->
                    </div><!-- /col -->
                    <div class="col-xl-8  col-lg-8  col-md-7  col-sm-9 col-12 pl-0  pt-6">
                        <div class="testimonial-comment pt-20 pr-50">
                            <p class="light-black-color7">I don't know how they do this, but thir products are authentic.</p>
                            <div class="testimonial-info d-sm-flex align-items-center pt-20">
                                <h5 class="font600 light-black-color2 pr-10">Christofer Lons</h5>
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->

                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-4  col-md-3  col-sm-3 col-12 pr-0 pt-6 d-flex justify-sm-content-end justify-content-center">
                        <div class="testimonial-avater position-relative">
                            <img src="{{ asset('images/bg/avater2.png') }}" alt="">
                            <div class="quote position-absolute">
                                <span class="h3-theme-bg white d-block text-center"><i class="fas fa-quote-left"></i></span>
                            </div>
                        </div><!-- /testimonial-abater -->
                    </div><!-- /col -->
                    <div class="col-xl-8  col-lg-8  col-md-7  col-sm-9 col-12 pl-0  pt-6">
                        <div class="testimonial-comment pt-20 pr-50">
                            <p class="light-black-color7">Had an issue with one of my deliveries and it was resolved within a day, thanks guys.</p>
                            <div class="testimonial-info d-sm-flex align-items-center pt-20">
                                <h5 class="font600 light-black-color2 pr-10">Christofer Lons</h5>
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->

            </div>
        </div><!-- /container -->
    </div>
    <!-- subscribe-area-end  -->

    <!-- ====== brand-logo-area-start ========================================= -->
    <div class="brand-logo-area bg-white over-hidden hm3">
        <div class="container border-t-gray pt-70 pb-70">
            <div class="mlr--55">
                <div class="row brand-active d-flex align-items-center ">
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand3.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand4.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand5.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand6.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand3.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                            <a href="#" class="d-block">
                                <img class="d-inline-block" src="{{ asset('images/brand/brand5.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div><!-- /brand-active -->
            </div>
        </div><!-- /container -->
    </div>
    <!-- brand-logo-area-end  -->
@endsection
