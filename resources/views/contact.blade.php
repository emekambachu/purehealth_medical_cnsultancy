@extends('layout')

@section('title')
    Contact us
@endsection

@section('contents')

    <div class="single-slider page-height3 d-flex align-items-center" data-background="{{ asset('images/bg/purchased-item-bg.jpg') }}" style="background-image: url(&quot;{{ asset('images/bg/purchased-item-bg.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10 text-white">Contact us</h2>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

    <div class="contact-area">
        <div class="container">
            <div class="row pb-100">
                <div class="col-xl-6  col-lg-6  col-md-12  col-sm- col-">
                    <div class="contact-form-left mt-60">
                        <div class="section-title text-left">
                            <h4 class="c-title mb-35 font600 title d-inline-block position-relative">Our Main Office</h4>
                            <p>Send us a message via our contact form and let us know what you need.</p>
                            <ul class="hot-line d-flex align-items-center mt-25 pb-25">
                                <li>
                                    <span class="h2-theme-color d-block mr-15"><i class="fal fa-headset"></i></span>
                                </li>
                                <li>
                                    <p class="mb-1">Hotline Free 24/24:</p>
                                    <a href="tell:+01500123994" class="light-black-color2 font600">
                                        +01 500 123 994
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /section-title -->
                        <div class="c-contact d-sm-flex">
                            <span class="primary-color pr-1">Address: </span>
                            <p>1234 Heaven Stress, Beverly Hill, Melbourne, USA.</p>
                        </div>
                        <div class="c-email d-sm-flex">
                            <span class="primary-color pr-1">Email: </span>
                            <p>info@purehealthmedics.com</p>
                        </div>
                        <div class="c-number d-sm-flex">
                            <span class="primary-color pr-1">Number Phone: </span>
                            <p>+61480048458</p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                    <div class="contact-form-right mt-60">
                        <h4 class="c-title mb-35 font600 title d-inline-block position-relative">Drop Us A Message</h4>
                        @if(session('success'))
                            <div class="text-center text-white p-3" style="width: 70%; margin: 4px auto; background-color: #3e976c;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ url('contact/submit') }}" method="post">
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
                                <label>Subject</label>
                                <div class="name">
                                    <input type="text" class="form-control primary-bg2 border-0 mt-2 py-2" name="subject" id="r-name">
                                </div>
                                <label class="mt-25">Description</label>
                                <textarea name="description" class="form-control primary-bg2 border-0 mt-2 pt-30 pb-30" id="message"></textarea>
                            </div><!-- /name-and-email -->
                            <button type="submit" class="web-btn h2-theme-border1 d-inline-block text-capitalize white mt-40 rounded-0 h2-theme-color h2-theme-bg position-relative over-hidden pl-60 pr-60 ptb-17">Submit</button>
                        </form>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
@endsection
