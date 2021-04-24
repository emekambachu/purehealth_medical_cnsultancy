@extends('layout')

@section('title')
    Request Product
@endsection

@section('contents')

    <div class="single-slider page-height3 d-flex align-items-center" data-background="{{ asset('images/bg/purchased-item-bg.jpg') }}"
         style="background-image: url(&quot;{{ asset('images/bg/purchased-item-bg.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10 text-white">Request Product</h2>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

    <div class="contact-area">
        <div class="container">
            <div class="row pb-100 justify-content-center">

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="contact-form-right mt-60">
                        <h4 class="c-title mb-35 font600 title d-inline-block position-relative">Input product details to request for any product of your choice</h4>

                        @if(session('success'))
                            <div class="text-center text-white p-3" style="width: 70%; margin: 4px auto; background-color: #3e976c;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action="{{ url('product/request/submit') }}">
                            @csrf
                            <div class="contact-form">
                                <label>Name</label>
                                <div class="name">
                                    <input type="text" class="form-control primary-bg2 border-0 mt-2 py-2" name="name" id="r-name">
                                </div>
                                <label class="mt-25">Email</label>
                                <div class="email">
                                    <input type="email" class="form-control primary-bg2 border-0 mt-2  py-2" name="email" id="r-email">
                                </div>
                                <label>Product Name</label>
                                <div class="name">
                                    <input type="text" class="form-control primary-bg2 border-0 mt-2 py-2" name="product">
                                </div>
                                <label class="mt-25">Product Description</label>
                                <textarea name="product_description" class="form-control primary-bg2 border-0 mt-2 pt-30 pb-30" id="message"></textarea>
                            </div><!-- /name-and-email -->
                            <button type="submit" class="web-btn h2-theme-border1 d-inline-block text-capitalize white mt-40 rounded-0 h2-theme-color h2-theme-bg position-relative over-hidden pl-60 pr-60 ptb-17">Request Product</button>
                        </form>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

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
