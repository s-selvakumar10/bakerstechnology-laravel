    @extends('layouts.allotherpages', [
    'title' => 'Contact Us - Bakers Technology Fair 2025',
    'meta_desc' => 'Connect with us at the Food & Drinks Processing Expo. Discover how we can assist you in enhancing your business and exploring industry innovations.',])

    @section('content')
        <section class="Working-section section-padding">
            <div class="container">
                <div class="working-common-head">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h3 class="wow fadeInLeft black-clr mb-40" data-wow-delay="0.4s">
                                Organised by
                            </h3>
                            <a href="organizer-profile" class="wow fadeInLeft" data-wow-delay="0.4s">
                                <img src="<?= asset('assets/img/logo/Synergt-logo-bl.png') ?>" alt="img"
                                    style="width: 50%;" class="mb-20">
                            </a>

                            <ul class="list-area list-contact mt-30 mb-60 wow fadeInUp" data-wow-delay="0.4s">
                                <li class="black-clr mt-0">
                                    <i class="fa-solid fa-location-dot p1-clr"></i>
                                    Synergy Exposures & Events India Pvt. Ltd.,<br>
                                    No #48, Plot no 57, 2nd Floor,<br>
                                    Chitalapakkam Main Road,<br>
                                    Mahalakshmi Nagar,<br>
                                    Selaiyur, Chennai -600126 -TN - India.
                                </li>
                                <li class="black-clr">
                                    <a href="#">
                                        <i class="fa-solid fa-envelope p1-clr"></i>
                                        info@bakerstechnologyfair.com
                                    </a>
                                </li>
                                <li class="black-clr mt-25">
                                    <i class="fa-solid fa-phone p1-clr"></i>
                                    +91 44 2278 0776
                                </li>
                                <li class="black-clr mt-25 column-dir">
                                    <i class="fas fa-handshake black-clr"></i>
                                    <b class="black-clr">For Sponsorship and Stand Booking:</b>
                                    Savitha,<br> General Manager<br>
                                    <a href="mailto:sales@synergyexposures.com" class="pra black-clr">sales@synergyexposures.com</a>
                                    +91 9380220533
                                </li>
                            </ul>
                            <!-- <p class="wow fadeInUp black-clr mt-40" data-wow-delay=".4s">
                                <b class="black-clr"><i class="fas fa-handshake black-clr"></i>&nbsp;&nbsp;For Sponsorship and Stand
                                    Booking : </b> <br> Balasubramanian M , Vice President - Sales <br><a
                                    href="mailto:bala@synergyexposures.org" class="pra p900-clr">bala@synergyexposures.org
                                </a><br> +91 8015930431
                            </p> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <x-contact-form />
                        <!--<div class="who-contact-wrap2">-->
                        <!--    <h3 class="p900-clr">Have A Query?</h3>-->
                        <!--    <p class="p900-clr ">Let's Help You With Your Enquiries!</p>-->
                        <!--    <form action="{{route('contact-form')}}" method="POST" class="row g-xl-4 g-3 mt-10">@csrf-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <input type="text" name="name"  placeholder="Name">-->
                        <!--            <div class="error">-->
                        <!--                <span class="text-danger  float-start small">-->
                        <!--                    @error('name')-->
                        <!--                        {{ $message }}-->
                        <!--                    @enderror-->
                        <!--                </span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <input type="text"  name="mobile"  placeholder="Mobile">-->
                        <!--            <div class="error">-->
                        <!--                <span class="text-danger  float-start small">-->
                        <!--                    @error('mobile')-->
                        <!--                        {{ $message }}-->
                        <!--                    @enderror-->
                        <!--                </span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <input type="email"  name="email" placeholder="E-mail">-->
                        <!--            <div class="error">-->
                        <!--                <span class="text-danger  float-start small">-->
                        <!--                    @error('email')-->
                        <!--                        {{ $message }}-->
                        <!--                    @enderror-->
                        <!--                </span>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--        <div class="col-lg-6">-->
                        <!--            <input type="text"  name="designation" placeholder="Designation">-->
                        <!--            <div class="error">-->
                        <!--                <span class="text-danger  float-start small">-->
                        <!--                    @error('designation')-->
                        <!--                        {{ $message }}-->
                        <!--                    @enderror-->
                        <!--                </span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-lg-12">-->
                        <!--             <input type="text"  name="company"  placeholder="Company">-->
                        <!--            <div class="error">-->
                        <!--                <span class="text-danger  float-start small">-->
                        <!--                    @error('company')-->
                        <!--                        {{ $message }}-->
                        <!--                    @enderror-->
                        <!--                </span>-->
                        <!--            </div>-->
                                    
                                   
                        <!--        </div>-->
                        <!--        <div class="col-lg-12">-->
                        <!--            <textarea name="message" rows="4" placeholder="Message"></textarea>-->
                        <!--            <div class="error">-->
                        <!--                <span class="text-danger  float-start small">-->
                        <!--                    @error('message')-->
                        <!--                        {{ $message }}-->
                        <!--                    @enderror-->
                        <!--                </span>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--        <div class="col-lg-12">-->
                        <!--            <button type="submit" class="cmn-btn cmn-primary2 text-capitalize">Submit Now</button>-->
                        <!--        </div>-->
                        <!--    </form>-->
                        <!--</div>-->
                    </div>
                </div>

                <div class="row g-xl-4 g-3 justify-content-center mt-40 mb-20"><!--m-40-->

                    <h3 class="col-lg-12 black-clr text-center mb-20"><!--mb-40 col-lg-3-->
                        Member of
                    </h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 order-md-0 order-1 text-center">
                            <a href="#">
                                <img src="<?= asset('assets/img/logo/ieia.png') ?>" style="width: 70%;" alt="logo-img">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 order-md-0 order-1 text-center">
                            <a href="#">
                                <img src="<?= asset('assets/img/logo/icc.png') ?>" style="width: 70%;" alt="logo-img">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- Contact Info Start -->

        <section class="counter-section3 mb-50"><!--m-40-->
            <div class="container">
                <div class="counter-version-wrapv1 counter-version-wrapv3 d-flex align-items-center justify-content-center">
                    <h5 class="">KNOW ABOUT THE ORGANISER?</h5>
                    <a href="organizer-profile" class="cmn-btn round100 wow" target="_blank">
                        Visit Here
                    </a>
                </div>

            </div>
        </section>
    @endsection
