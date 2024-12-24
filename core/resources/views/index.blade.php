@extends('layouts.app',
[
"title"=>"Bakers Technology Fair 2025",
"meta_desc" => "Explore cutting-edge technologies and trends in the food and drink processing industry at the 2024 expo in India."
]
)
    @section('content')
        <!-- About Version V01 -->
        <section class="about-section hom-about style-v01 section-padding white-bg">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 order-md-0 order-1">
                        <!-- <div class="about-left">
                            <img class="img-fluid h2-about-img1" src="<?//= asset('assets/img/home/intro.png') ?>" alt="About" class="img-fluid"> 
                        </div> -->

                        <div class="banner-img-wp">
                            <div class="banner-img">
                                <div class="wow fadeInDown banner-carousel owl-carousel" data-wow-delay="0.5s">
                                    <div class="img-wrap-item">
                                        <img src="<?= asset('assets/img/home/intro-img-1.jpg') ?>" alt="img" class="img-fluid">
                                    </div>
                                    <div class="img-wrap-item">
                                        <img src="<?= asset('assets/img/home/intro-img-2.jpg') ?>" alt="img" class="img-fluid">
                                    </div>
                                    <div class="img-wrap-item">
                                        <img src="<?= asset('assets/img/home/intro-img-3.jpg') ?>" alt="img" class="img-fluid">
                                    </div>
                                    <div class="img-wrap-item">
                                        <img src="<?= asset('assets/img/home/intro-img-4.jpg') ?>" alt="img" class="img-fluid">
                                    </div>
                                    <div class="img-wrap-item">
                                        <img src="<?= asset('assets/img/home/intro-img-5.jpg') ?>" alt="img" class="img-fluid">
                                    </div>
                                    <div class="img-wrap-item">
                                        <img src="<?= asset('assets/img/home/intro-img-6.jpg') ?>" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-contentv1">
                            <div class="section-title"><!-- m-40 -->

                                <h2 class="wow fadeInDown mobile-content" data-wow-delay=".3s">
                                    A Focused Expo on Bakery & Confectionery Equipment, Ingredients, Technology & Services
                                </h2>
                                <p class="wow fadeInUp mobile-content" data-wow-delay=".4s">
                                The Bakery Technology Fair (BTF) is the premier event for the baking, confectionary, sweet & snack industry. BTF is an annual expo to explore the latest advancements in equipment, technology, ingredients, and packaging solutions.
                                </p>
                                <p class="wow fadeInUp mobile-content" data-wow-delay=".4s">
                                Whether you're a seasoned food manufacturer or a budding bakery professional, BTF offers invaluable sourcing insights and opportunities. Discover innovative ingredients to elevate your products, explore cutting-edge equipment to streamline your operations, and gain expert guidance on scaling your business.
                                </p>
                                <p class="wow fadeInUp mobile-content" data-wow-delay=".4s">
                                This year, BTF will spotlight two essential verticals: Innovative Ingredients and Food Packaging. Learn about the latest
                                trends in flavour profiles, natural additives, and sustainable sourcing. Explore innovative packaging solutions that
                                enhance product shelf life, brand guide lines, and meet evolving consumer demands.    
                                </p>
                                <p class="wow fadeInUp mobile-content" data-wow-delay=".4s">
                                Don't miss out on this exciting bakery expo! Connect with industry leaders, network with like-minded professionals, and stay ahead of the curve. Mark your calendars and visit BTF to unlock the potential of your bakery or confectionary business.    
                                </p>
                                <div class="row">
                                    <div class="key-item-1">
                                        <img src="<?= asset('assets/img/icon/bakery-icon.png') ?>" alt="Bakery"><!--technology.png-->
                                        <p>Bakery</p>
                                    </div>
                                    <div class="key-item-1">
                                        <img src="<?= asset('assets/img/icon/confectionary-icon.png') ?>" alt="Confectionery"><!--solutions.png-->
                                        <p>Confectionery</p>
                                    </div>
                                    <div class="key-item-1">
                                        <img src="<?= asset('assets/img/icon/snack-icon4.png') ?>" alt="Sweet & Snack"><!--solutions.png-->
                                        <p>Sweet & Snack</p>
                                    </div>
                                    <div class="key-item-1 button-center">
                                        <a href="exhibitor-registration" class="cmn-btn3 round100">
                                            Register
                                        </a><!-- cmn-primary2 -->
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- matchmaking -->
        <section class="who-section overflow-hidden black-bg section-padding call_action_black"><!--p900-bg-->
            <div class="container">
                <div class="row g-4 ">
                    <div class="col-lg-12 justify-content-center">
                        <div class="section-title section-title-matchmaking mb-40">
                            <!-- <h5 class="p1-clr wow fadeInLeft" data-wow-delay="0.4s">
                                Who we are
                            </h5> -->
                            <h2 class="wow fadeInDown white-clr mb-24" data-wow-delay=".3s">
                                Business Matchmaking
                            </h2>
                            <p class="white-clr wow fadeInDown" data-wow-delay=".4s">
                                Meet the business leaders in the industry, discuss your prospects, and develop potential
                                promising <br>partnerships that can uplift your business! Don’t miss this opportunity!
                            </p>
                        </div>
                        <div class="section-title section-title-matchmaking mb-0"><!-- mb-40 -->
                            <a href="business-matchmaking" class="cmn-btn round100 wow fadeInUp" data-wow-delay="0.9s">
                                Meet The Tycoons
                            </a><!--cmn-btn2-->
                        </div>

                    </div>

                </div>
            </div>
            <!-- Element -->
            <!-- <img src="<?//= asset('assets/img/element/who-element.png') ?>" alt="img" class="who-element"> -->
            <!-- <div class="call_action_black_shape"> 
                <img src="<?//= asset('assets/img/home/call-action-shape.png') ?>" alt="img" class="img-fluid">
            </div>
            <div class="call_action_black_shape_1"> 
                <img src="<?//= asset('assets/img/home/call-action-shape-1.png') ?>" alt="img" class="img-fluid">
            </div> -->
            <div class="pattern-layer-two">
                <img src="<?= asset('assets/img/home/call_action_icon_1.png') ?>" alt="">
            </div>
            <!--<div class="pattern-layer-three">
                <img src="<//?= asset('assets/img/footer/icon-6.png') ?>" alt="">
            </div>
            <div class="pattern-layer-four">
                <img src="<//?= asset('assets/img/home/call_action_icon_2.png') ?>" alt="">
            </div>-->
        </section>

        <!-- Key Focus Sectors -->
        <section class="recent-project-section fix section-padding white-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9 col-xl-9 col-md-10 col-sm-12"><!--col-xxl-6 col-xl-7 col-md-8 col-sm-11-->
                        <div class="section-title mb-0 text-center"><!--mb-60 -->
                            <!-- <h5 class="p1-clr wow fadeInLeft" data-wow-delay="0.4s"> -->
                            <h2 class="wow fadeInDown mb-20" data-wow-delay=".3s">
                                Key Focus Sector
                            </h2>
                            <p class="wow fadeInUp">One stop shop for Innovative ingredients, smart production and food packaging</p>
                        </div>

                    </div>
                </div>
                <section class="about-section style-v01 white-bg mb-50">
                    <div class="container">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-8 order-md-0 order-1">
                                <div class="position-relative text-center wow fadeInLeft"><!--about-thumv01 -->
                                    <img src="<?= asset('assets/img/home/key-focus.jpg') ?>" alt="img" class="mimg img-fluid"
                                        class="t-food wow fadeInLeft" data-wow-delay=".7s"><!--about/key-focus.png-->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="about-contentv1 key-contentv1 wow fadeInRight">
                                    <div class="section-title mb-0"><!-- mb-40-->
                                        <div class="row">
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/bread-icon.png') ?>" alt="Bread">
                                                </div>
                                                <p>Bread</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/biscuit-icon.png') ?>" alt="Biscuit">
                                                </div>
                                                <p>Biscuit</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/confectionary-icon.png') ?>" alt="Confectionary">
                                                </div>
                                                <p>Confectionary</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/sweet-icon.png') ?>" alt="Sweet">
                                                </div>
                                                <p>Sweet</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/snack-icon.png') ?>" alt="Snack">
                                                </div>
                                                <p>Snack</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/dairy-icon.png') ?>" alt="Dairy">
                                                </div>
                                                <p>Dairy</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/frozen-icon.png') ?>" alt="Frozen">
                                                </div>
                                                <p>Frozen</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/industrial-icon.png') ?>" alt="Industrial">
                                                </div>
                                                <p>Industrial</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/food-service-icon.png') ?>" alt="Food Service">
                                                </div>
                                                <p>Food Service</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/retail-icon.png') ?>" alt="Retail">
                                                </div>
                                                <p>Retail</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/contract-manufacturing-icon.png') ?>" alt="Contract Manufacturing">
                                                </div>
                                                <p>Contract Manufacturing</p>
                                            </div>
                                            <div class="key-item col-lg-3 col-md-3">
                                                <div class="key-focus-img">
                                                    <img src="<?= asset('assets/img/home/artisan-bakery-icon.png') ?>" alt="Artisan Bakery">
                                                </div>
                                                <p>Artisan Bakery</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row justify-content-center">
                    <div class="col-xxl-9 col-xl-9 col-md-10 col-sm-12"><!--col-xxl-6 col-xl-7 col-md-8 col-sm-11-->
                        <div class="section-title mb-60 text-center">
                            <h2 class="wow fadeInDown" data-wow-delay=".3s">
                                Reasons Why Stake Holders Look at BTF
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
            <section class="service-feature-section white-bg mb-20">
                <div class="filter-mixtup">
                    <div class="container">
                        <div class="all-catagorys">
                            <div class="mix category-a" data-order="1">
                                <div class="feature-itemsv1">
                                    <img src="<?= asset('assets/img/gallery/feature1-1.png') ?>" alt="img"
                                        class="f-thumb feature-items-img">
                                    <div class="content">
                                        <a class="title">BLOOMING BUSINESS</a>
                                        <p>Generate new business opportunities, find new business ideas and expand your
                                            existing business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-c" data-order="2">
                                <div class="feature-itemsv1">
                                    <img src="<?= asset('assets/img/gallery/feature2-1.png') ?>" alt="img"
                                        class="f-thumb feature-items-img">
                                    <div class="content">
                                        <a class="title">LAUNCHING PLATFORM</a>
                                        <p>Get the best ever platform to launch your products and services to a wide range
                                            of audience and industry bigwigs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mix category-a category-c" data-order="3">
                                <div class="feature-itemsv1">
                                    <img src="<?= asset('assets/img/gallery/feature3-1.png') ?>" alt="img"
                                        class="f-thumb feature-items-img">
                                    <div class="content">
                                        <a class="title"> B2B MEETINGS</a>
                                        <p>The ideal platform for B2B meetings where you can meet the reigning business
                                            leaders, interact with them and gain knowledge.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-a" data-order="4">
                                <div class="feature-itemsv1">
                                    <img src="<?= asset('assets/img/gallery/feature4-1.png') ?>" alt="img"
                                        class="f-thumb feature-items-img">
                                    <div class="content">
                                        <a class="title">GAIN EXPOSURE</a>
                                        <p>Your ticket to fame is right here! Gain exposure to the latest innovations in the
                                            field, and meet the best in the industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-b" data-order="5">
                                <div class="feature-itemsv1">
                                    <img src="<?= asset('assets/img/gallery/feature5-1.png') ?>" alt="img"
                                        class="f-thumb feature-items-img">
                                    <div class="content">
                                        <a class="title">STAY AHEAD</a>
                                        <p>Get upto date information about the latest technologies and innovations in the
                                            industry, gain experience and stay ahead of the competition.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-b" data-order="5">
                                <div class="feature-itemsv1">
                                    <img src="<?= asset('assets/img/gallery/feature6-1.png') ?>" alt="img"
                                        class="f-thumb feature-items-img">
                                    <div class="content">
                                        <a class="title">INTERNATIONAL NETWORKING</a>
                                        <p>Get the best ever platform to launch your products and services to a wide range
                                            of audience and industry bigwigs.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <!-- Counter Section -->
            <section class="counter-section02 position-relative mt-80" style="bottom: 50px;">
                <div class="container">
                    <div class="counter-version-wrapv1 d-flex align-items-center justify-content-between gap-4">
                        <div class="counter-items counter-items-heading style02">
                            <h3>Concurrent Expo</h3>
                        </div>
                        <div class="counter-items style02">
                            <a href="https://www.fdpexpo.com/" target="_blank">
                                <img src="<?= asset('assets/img/logo/fdp.png') ?>" class="concur-images" alt="img">
                            </a>
                        </div>
                        <div class="counter-items style02">
                            <a href="https://indiahorecaexpo.com/" target="_blank">
                                <img src="<?= asset('assets/img/logo/ihe.png') ?>" class="concur-images" alt="img">
                            </a>
                        </div>
                        <div class="counter-items style02">
                            <a href="https://dairyprocessingexpo.com/" target="_blank"><img
                                    src="<?= asset('assets/img/logo/idp.png') ?>" class="concur-images" alt="img">
                            </a>
                        </div>
                        <div class="counter-items style02">
                            <a href="https://foodpackexpo.com/" target="_blank"><img
                                    src="<?= asset('assets/img/logo/ifp.png') ?>" class="concur-images" alt="img">
                            </a>
                        </div>
                        <div class="counter-items style02">
                            <a href="<?= asset('pdf/Food-Confluence-2024.pdf') ?>" target="_blank"><img
                                    src="<?= asset('assets/img/logo/fc.png') ?>" class="concur-images" alt="img">
                            </a>
                        </div>

                    </div>
                </div>
            </section>
        </section>

        <!--<< Sponsor Branding Start >>-->
        <section class="sponsor-branding-section section-padding-sponsor white-bg mt-40"><!-- mt-80-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-md-8 col-sm-11">
                        <div class="section-title mb-60 text-center">
                            <!-- <h5 class="p1-clr wow fadeInLeft" data-wow-delay="0.4s"> -->
                            <h2 class="wow fadeInDown mb-20" data-wow-delay=".3s">
                                Supported By
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide justify-content-center">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/support-1.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">

                                <img src="<?= asset('assets/img/sponsor/support-2.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/support-3.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/support-4.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/support-5.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/support-6.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/support-7.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/kassia.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<< Sponsor Branding Start >>-->
        <section class="sponsor-branding-section section-padding-sponsor white-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-md-8 col-sm-11">
                        <div class="section-title mb-60 text-center">
                            <!-- <h5 class="p1-clr wow fadeInLeft" data-wow-delay="0.4s"> -->
                            <h2 class="wow fadeInDown mb-20" data-wow-delay=".3s">
                                Media Partners
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide justify-content-center">
                            
                            <div class="brand-image">
                                <img src="<?//= asset('assets/img/sponsor/mediapartner-1.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>-->
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">

                                <img src="<?= asset('assets/img/sponsor/mediapartner-2.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/mediapartner-3.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/mediapartner-4.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/mediapartner-5.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/mediapartner-6.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <!--<div class="swiper-slide">
                            
                            <div class="brand-image">
                                <img src="<?//= asset('assets/img/sponsor/mediapartner-7.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>-->
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/mediapartner-8.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <p class="sponsor"> supported by</p> -->
                            <div class="brand-image">
                                <img src="<?= asset('assets/img/sponsor/mediapartner-9.jpg') ?>" alt="img"
                                    class="brand-image-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<< Outreach Partner Start >>-->
        <section class="sponsor-branding-section outreach-partner section-padding-sponsor white-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-md-8 col-sm-11">
                        <div class="section-title mb-40 text-center">
                            <h2 class="wow fadeInDown mb-20" data-wow-delay=".3s">
                                Outreach Partner
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="outreach-image text-center">
                            <img src="<?= asset('assets/img/outreach-partner/aic.png ') ?>" alt="img" class="img-fluid" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
