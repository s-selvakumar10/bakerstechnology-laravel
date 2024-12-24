<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    @stack('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="t1psa0klp1anjijo0qa903sk922qef"/>
    <meta name="facebook-domain-verification" content="31wc8zb7trbwx5xeamsm2xr4wndpm2" />
    <meta name="author" content="">
    <meta name="description" content='{!! $meta_desc ?? "Bakers Technology Fair 2025" !!}'>

    <!-- ======== Page title ============ -->
    <title>{!!$title ?? "Bakers Technology Fair 2025"!!}</title>
 
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="<?= asset('assets/img/favicon.png') ?>">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/bootstrap.min.css') ?>">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/all.min.css') ?>">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/animate.css') ?>">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/magnific-popup.css') ?>">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/meanmenu.css') ?>">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/swiper-bundle.min.css') ?>">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?= asset('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="<?= asset('assets/css/skins/square/grey.css" rel="stylesheet') ?>">
    <link href="<?= asset('assets/css/forms/icon_fonts/css/all_icons_min.css') ?>" rel="stylesheet'">
    <link rel="stylesheet" href="<?= asset('assets/css/main.css') ?>">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <!--<< Main.css >>-->
    <link href="<?= asset('assets/css/custom.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/responsive.css') ?>">
    <script async src="https://www.google.com/recaptcha/api.js"></script>
     @include('layouts.common')
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VGS64EYNTJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-VGS64EYNTJ');
    </script>
    
    @stack('conversion_scripts')
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="box d-grid gap-4">
            <span class="man-pre m-auto">
                <img src="<?= asset('assets/img/banner/preloader.png') ?>" alt="img">
            </span>
            <span class="p1-clr fz-40 fw-bold text-center d-block">
                FarmHub
            </span>
        </div>
    </div> -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button"><i
            class="mat-icon fas fa-angle-double-up"></i></button>
    <!-- Scroll To Top End -->
    @include('layouts.inner-includes.header')

    @yield('content')

    @include('layouts.inner-includes.footer')



    <!--<< All JS Plugins >>-->
    <script src="<?= asset('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <!--<< Viewport Js >>-->
    <script src="<?= asset('assets/js/viewport.jquery.js') ?>"></script>
    <!--<< Bootstrap Js >>-->
    <script src="<?= asset('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!--<< Nice Select Js >>-->
    <script src="<?= asset('assets/js/jquery.nice-select.min.js') ?>"></script>
    <!--<< Waypoints Js >>-->
    <script src="<?= asset('assets/js/jquery.waypoints.js') ?>"></script>
    <!--<< Counterup Js >>-->
    <script src="<?= asset('assets/js/jquery.counterup.min.js') ?>"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="<?= asset('assets/js/swiper-bundle.min.js') ?>"></script>
    <!--<< MeanMenu Js >>-->
    <script src="<?= asset('assets/js/jquery.meanmenu.min.js') ?>"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="<?= asset('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <!--<< Filter Mixtup Js >>-->
    <script src="<?= asset('assets/js/mixitup.min.js') ?>"></script>
    <!--<< Wow Animation Js >>-->
    <script src="<?= asset('assets/js/wow.min.js') ?>"></script>
    <script src="<?= asset('assets/js/icheck.min.js') ?>"></script>
    <script src="<?= asset('assets/js/jquery.stepy.min.js') ?>"></script>
    <script src="<?= asset('assets/js/jquery.validate.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--<< Main.js >>-->
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    @stack('scripts')
    <script src="<?= asset('assets/js/sign-up-validate.js') .'?v='.uniqid()?>"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
    <script src="<?= asset('assets/js/jquery.blockUI.js') ?>"></script> 
     <script src="<?= asset('assets/js/function.js') ?>"></script>
    <script>
       
        $('input.icheck').iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });
        
         $(document).ready(function() {
            <?php if (session('success')): ?>

            Swal.fire({
                icon: "success",
                title: "<?php echo session('success'); ?>",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonColor: "#bf9444",
                cancelButtonText: "Close"
            });

            <?php endif; ?>
        });
    </script>
   
</body>

</html>
