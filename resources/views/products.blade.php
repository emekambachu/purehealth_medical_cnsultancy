@extends('layout')

@section('title')
    Products
@endsection

@section('contents')

    <div class="single-slider page-height3 d-flex align-items-center" data-background="images/bg/purchased-item-bg.jpg" style="background-image: url(&quot;{{ asset('images/bg/purchased-item-bg.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10 text-white">Products</h2>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

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

                    <div class="col-xl-4  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                        <div class="single-handpick-item mb-35">
                            <div class="single-handpick-item-img position-relative">
                                <a href="" class="d-block">
                                    <img src="{{ asset('images/products/black_leather_surgery_bed.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Black Leather Surgery Bed</a></h6>
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
                                    <img src="{{ asset('images/products/double_ceiling_surgical_light.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="single-handpick-item-content">
                                <div class="single-product-info transition-3">
                                    <h6 class="light-black-color2"><a href="">Double Ceiling Surgical Light</a></h6>
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

    <!-- ====== product-area-start================================ -->
    <div class="product-area">
        <div class="container">
            <div class="product-content single-product-tab-content">
                <div class="row">
                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                        <div class="section-title text-center">
                            <h3 class="font-pt light-black-color2 pb-1">Our Products</h3>
                        </div><!-- /section-title -->
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="product-wrapper mt-1">
                    <div class="row">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <div class="popular-product">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-3  col-md-6 col-sm-6 col-12 plr-14">

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product1.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Surgical Face Disinfection</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product2.jpg') }}"
                                                         class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            IT Contact Thermometer</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product3.jpg') }}"
                                                         class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2">
                                                        <a href="{{ url('request/product') }}">Bifunctional Scale X200</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product4.jpg') }}"
                                                         class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Nursing Care Protection</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product5.jpg') }}"
                                                         class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2">
                                                        <a href="{{ url('request/product') }}">Blood Pressure Monitor</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute theme-bg text-center  transition-3 z-index1">
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product6.jpg') }}"
                                                         class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2">
                                                        <a href="{{ url('request/product') }}">Surgical Face Disinfection</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/black_leather_surgery_bed.png') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Black Leather Surgical Bed</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/product/product3.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">Bifunctional Scale X200</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/double_ceiling_surgical_light.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Double Ceiling Surgical Light</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/electro-surgical-unit-500x500.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">Electro Surgical Unit</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/endoscopy-equipment-500x500.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Endoscopy Equipment</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/flexible endoscopes.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Flexible Endoscopes</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/Hill-Rom_Advance_Hospital_Bed_large.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Hill-Rom Advanced Hospital Bed</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/patient_warmer.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Patient Warmer</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3  col-md-6  col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/patient-monitor-500.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Patient Monitor</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/Mindray-A3-Anesthesia-Machine-For-Sale-2.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Mindray A3 Anestesia Machine</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                    <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12 plr-14">
                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/Olympus-CV-180-Video-Endoscopy-System.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Olympus CV Video Endoscopy</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->

                                        <div class="single-product mb-30">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="{{ url('request/product') }}">
                                                    <img src="{{ asset('images/products/Skytron-Aurora-LED-Surgical-Light-Hybrid-OR.jpg') }}" class="w-100" alt="product">
                                                </a>
                                                <div class="single-product-info position-absolute mt-25 text-center transition-3">
                                                    <h6 class="light-black-color2"><a href="{{ url('request/product') }}">
                                                            Skytron Aurora LED Surgical Light</a></h6>
                                                    <a href="{{ url('request/product') }}"
                                                       class="text-white d-inline-block bor-radius5 plr-32 font14 font600 mr-6 justify-content-center" style="background-color: #3DBEBD; padding: 5px;">Request Product</a>
                                                </div>
                                            </div><!-- /single-product-img -->
                                        </div><!-- /single-product -->
                                    </div><!-- /col -->

                                </div><!-- /row -->
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /product-wrapper -->

            </div><!-- /product-content -->
        </div><!-- /container -->
    </div>
    <!-- product-area-end  -->

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
