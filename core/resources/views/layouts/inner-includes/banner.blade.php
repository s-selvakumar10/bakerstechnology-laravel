   <!-- Hero Section Start -->
   <section class="banner-section banner-section-other style-v1 overflow-hidden text-center">
        <video autoplay muted loop class="background-video">
            <source src="<?= asset('assets/img/banner/videos.mp4') ?>" type="video/mp4">            
        </video>
        <div class="container">
            <div class="row g-4 align-items-center position-relative ">
                <h1 class="wow fadeInUp white-clr" data-wow-delay="0.4s" >
                    @if (isset($banner_logo))
                          <img src="<?= $banner_logo ?> ">
                    @endif
                   
                    <?= $banner_title ?? '' ?>                           
                </h1>                      
            </div>
        </div>
    </section> 