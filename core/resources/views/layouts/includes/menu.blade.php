    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="#">
                                <img src="<?= asset('assets/img/mobile-logo.png') ?>" alt="Bakery Technology Fair - 2025">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        
                        <h4>Social Media</h4>
                        <div class="social-icon d-flex align-items-center">
                        <a href="https://www.facebook.com/bakerstechnologyfair/" target="_blank" ><i class=" fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/SYNERGY_EXPO" target="_blank" ><i class=" fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/71332437/admin/" target="_blank" ><i class=" fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@bakerstechnologyfair" target="_blank" ><i class=" fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Header Top Section Start -->
   <?php /* <div class="header-top-section style-v01 ">
        <div class="container">
            <div class="header-top-wrapper">                              
                
                <!-- <ul class="contact-list">

                </ul> -->
                
                <!-- <ul class="location-area"> 
        
                </ul>  -->
            </div>
        </div>
    </div> */ ?>
    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index" class="header-logo">                                
                                <img src="<?= asset('assets/img/logo/logo.png') ?>" alt="logo-img" style="width: 102%;height: 85px;">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{url('/')}}">
                                                Home                                                
                                            </a>                                            
                                        </li>
                                        <li>
                                            <a href="{{url('about')}}">About</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Exhibitor
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{url('why-exhibit')}}">Why Exhibit</a></li>
                                                <li><a href="{{url('exhibitor-profile')}}">Exhibitor Profile</a></li>
                                                <li><a href="{{url('facts-figures')}}">Facts and Figures</a></li>
                                                <li><a href="{{url('exhibitor-registration')}}">Exhibitor Enquiry</a></li>
                                            </ul>
                                            
                                        </li>
                                        <li>
                                            <a href="#">
                                                Visit
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{url('why-visit')}}">Why Visit</a></li>
                                                <li><a href="{{url('visitor-profile')}}">Visitor Profile</a></li>
                                                <li><a href="{{url('visitor-registration')}}">Visitor Registration</a></li>
                                                <li><a href="{{url('business-matchmaking')}}">Business Matchmaking</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('/workshop-registration')}}">
                                                CW Registration                                                
                                            </a>                                            
                                        </li>
                                        <li>
                                            <a href="#">
                                                Services
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{url('services-bengaluru')}}">Bengaluru</a></li>
                                                <li><a href="{{url('services-coimbatore')}}">Coimbatore</a></li>
                                            </ul>
                                        </li>                                                                                
                                        <li>
                                            <a href="#">
                                                Travel
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{url('travel-bengaluru')}}">Bengaluru</a></li>
                                                <li><a href="{{url('travel-coimbatore')}}">Coimbatore</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Media
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="#">Press Release</a></li>
                                                <li><a href="#" class="secondary-post-show-report-btn"  data-bs-toggle="modal" data-bs-target="#postShowReportModal">Post Event Report</a></li>
                                                <li><a href="{{url('media-partner')}}">Media Partner</a></li>
                                                <?php /*<li><a href="#">Blogs
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="food-technology">Food Technology</a></li>
                                                        <li><a href="dairy-technology"> Dairy Technology</a></li>
                                                        <li><a href="food-business"> Food Business</a></li>
                                                        <li><a href="food-manufacturing"> Food Manufacturing</a></li>
                                                        <li><a href="food-packaging-technology"> Food Packaging Technology</a></li>
                                                    </ul>
                                                </li> */?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                            Visitor Guide
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{url('visitor-guide')}}">Visitor Guide</a></li>
                                                <li><a href="{{url('exhibitors-list')}}">Exhibitors List</a></li>
                                            </ul>
                                        </li>
                                        <!--<li>
                                            <a href="#">
                                            Blog
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{url('food-technology')}}">Food Processing Technology</a></li>
                                                <li><a href="{{url('dairy-technology')}}">Dairy Processing Technology</a></li>
                                                <li><a href="{{url('food-business')}}">Food Business Techonolgy</a></li>
                                                <li><a href="{{url('food-manufacturing')}}">Food Manufacturing Technology</a></li>
                                                <li><a href="{{url('food-packaging-technology')}}">Food Packaging Technology</a></li>
                                            </ul>
                                        </li>-->
                                        <li>
                                            <a href="{{url('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-form.brochure-download />
        <x-form.food-confluence-brochure />
        <x-form.post-show-report />
        <x-form.workshop-brochure />
    </header>
