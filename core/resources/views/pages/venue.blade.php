@extends('layouts.allotherpages')

@section('content')
    <!-- Hero Section Start -->
    <section class="banner-section banner-section-other style-v1 overflow-hidden text-center">
        <video autoplay muted loop class="background-video">
            <source src="assets/img/banner/videos.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row g-4 align-items-center position-relative ">
                <h1 class="wow fadeInUp white-clr" data-wow-delay="0.4s">
                    Venue
                </h1>
            </div>
        </div>
    </section>


    <section class="gallery-detailssection m-60 white-bg">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center">

                <h3 class="wow fadeInUp p900-clr m-50" data-wow-delay=".4s">
                    The Event Venue
                </h3>

            </div>
            <div class="overflow-hidden" data-bg-src="assets/img/venue/campaign_bg_1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 text-center text-xl-start">
                            <div class="pe-xxl-3">
                                <div class="title-area">
                                    <p class="sec-text p800-clr">Join us at Palace Ground, the epicenter of South India's
                                        premier Food and Drink processing expo, where innovation meets opportunity. Connect
                                        with top suppliers, buyers, and industry experts to fuel your business success!</p>
                                </div>
                                <div class="campaign-feature-area">
                                    <div class="campaign-feature-wrap">
                                        <div class="campaign-feature">
                                            <div class="box-icon">
                                                <i class="fas fa-location-dot"></i>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">Location</h3>
                                                <p class="box-text">TRIPURA VASINI PALACE GROUND,<br>
                                                    NEAR MEKHRI CIRCLE , BENGALURU<br>
                                                    Karnataka - 560006 ,INDIA</p>
                                            </div>
                                        </div>
                                        <div class="campaign-feature">
                                            <div class="box-icon">
                                                <i class="fas fa-calendar-days"></i>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="box-title">When</h3>
                                                <p class="box-text">28 - 30 January, 2025<br>
                                                    10:00 AM – 6:00 PM <br>
                                                    10:00 AM – 6:00 PM<br>
                                                    10:00 AM – 5:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="visitor-registration"
                                        class="cmn-btn round100 wow fadeInUp gr-bg1 shadow-none" data-wow-delay="0.9s">Buy
                                        Tickets Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="img-box2">
                                <div class="img1">
                                    <img src="assets/img/venue/campaign_1.jpg" alt="Why">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
