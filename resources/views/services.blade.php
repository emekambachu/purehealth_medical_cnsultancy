@extends('layout')

@section('title')
    Services
@endsection

@section('contents')

    <div class="single-slider page-height3 d-flex align-items-center" data-background="{{ asset('images/bg/purchased-item-bg.jpg') }}" style="background-image: url(&quot;{{ asset('images/bg/purchased-item-bg.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title mt-10 text-center">
                        <h2 class="text-capitalize font600 mb-10 text-white">Services</h2>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>

    <div class="blog-area pt-120 ">
        <div class="container">
            <div class="row">

                <div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12 plr-20">
                    <div class="single-blog mb-30">
                        <div class="blog-img position-relative transition-3 mt-25">
                            <div class=" over-hidden">
                                <a href=""><img class="img-zoom" src="{{ asset('images/services/serv4.jpg') }}" alt=""></a>
                                <div class="blog-shadow position-absolute transition-5 light-theme-bg"></div>
                            </div>
                        </div><!-- /blog-img -->
                        <div class="single-blog-content position-relative transition-5 pt-3 pr-25 pb-40">
                            <h5>Medical Supplies</h5>
                            <p class="pb-1 light-black-color7">We are the information backbone for most of the largest integrated health care technologies.</p>
                        </div>
                    </div>
                </div><!-- /col -->

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 plr-20">
                    <div class="single-blog mb-30">
                        <div class="blog-img position-relative transition-3 mt-25">
                            <div class="over-hidden">
                                <a href=""><img class="img-zoom" src="{{ asset('images/services/serv2.jpg') }}" alt=""></a>
                                <div class="blog-shadow position-absolute transition-5 light-theme-bg"></div>
                            </div>
                        </div><!-- /blog-img -->
                        <div class="single-blog-content position-relative transition-5 pt-3 pr-25 pb-40">
                            <h5>Logistics</h5>
                            <p class="pb-1 light-black-color7">With our reliable logistics services, your products and mdical apliances are delivered at your doorstep.</p>
                        </div>
                    </div>
                </div><!-- /col -->

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 plr-20">
                    <div class="single-blog mb-30">
                        <div class="blog-img position-relative transition-3 mt-25">
                            <div class="over-hidden">
                                <a href=""><img class="img-zoom" src="{{ asset('images/services/serv1.jpg') }}" alt=""></a>
                                <div class="blog-shadow position-absolute transition-5 light-theme-bg"></div>
                            </div>
                        </div><!-- /blog-img -->
                        <div class="single-blog-content position-relative transition-5 pt-3 pr-25 pb-40">
                            <h5>Care Management</h5>
                            <p class="pb-1 light-black-color7">Identify outreach and care gaps opportunities with custom patient cohorts across hundreds of clinical and decision support fields.</p>
                        </div>
                    </div>
                </div><!-- /col -->

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 plr-20">
                    <div class="single-blog mb-30">
                        <div class="blog-img position-relative transition-3 mt-25">
                            <div class="over-hidden">
                                <a href=""><img class="img-zoom" src="{{ asset('images/services/serv3.jpg') }}" alt=""></a>
                                <div class="blog-shadow position-absolute transition-5 light-theme-bg"></div>
                            </div>
                        </div><!-- /blog-img -->
                        <div class="single-blog-content position-relative transition-5 pt-3 pr-25 pb-40">
                            <h5>Health Diagnostics</h5>
                            <p class="pb-1 light-black-color7">Improve health performance with our analytics technologies provide greater flexibility to analyze raw data so you can be more efficient and focus on practice profitability.</p>
                        </div>
                    </div>
                </div><!-- /col -->

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 plr-20">
                    <div class="single-blog mb-30">
                        <div class="blog-img position-relative transition-3 mt-25">
                            <div class="over-hidden">
                                <a href=""><img class="img-zoom" src="{{ asset('images/services/serv6.jpg') }}" alt=""></a>
                                <div class="blog-shadow position-absolute transition-5 light-theme-bg"></div>
                            </div>
                        </div><!-- /blog-img -->
                        <div class="single-blog-content position-relative transition-5 pt-3 pr-25 pb-40">
                            <h5>24hours Professional Service</h5>
                            <p class="pb-1 light-black-color7">You get designated 24/7 support, system monitoring, and regular check-ups to ensure your long-term success and improvement.</p>
                        </div>
                    </div>
                </div><!-- /col -->

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 plr-20">
                    <div class="single-blog mb-30">
                        <div class="blog-img position-relative transition-3 mt-25">
                            <div class="over-hidden">
                                <a href=""><img class="img-zoom" src="{{ asset('images/services/serv1.jpg') }}" alt=""></a>
                                <div class="blog-shadow position-absolute transition-5 light-theme-bg"></div>
                            </div>
                        </div><!-- /blog-img -->
                        <div class="single-blog-content position-relative transition-5 pt-3 pr-25 pb-40">
                            <h5>Technology Consultation</h5>
                            <p class="pb-1 light-black-color7">You get designated 24/7 support, system monitoring, and regular check-ups to ensure your long-term success and improvement.</p>
                        </div>
                    </div>
                </div><!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div>
@endsection
