    @extends('layouts.allotherpages')

    @section('content') 

      <section class="gallery-detailssection gallery-detailssection-2 overflow-hidden  white-bg m-60">
      <div class="container">
            <div class="thank-you-container">
                <img src="<?= asset('assets/img/shape/check-tick.png') ?>" alt="Checkmark">
                
                <h1 class="gold-clr">Thank you for contacting us,</h1>
                <p>Our team will get back to you in a short while.</p>
            </div>

            <div class="info-boxes">
                <div class="info-box">
                    <h3>For Exhibitors</h3>
                    <ul>
                        <li>Why Exhibit?</li>
                        <li>Who Can Exhibit?</li>
                        <li>How to Register?</li>
                        <li>How to Contact us?</li>
                    </ul>
                </div>
                <div class="info-box">
                    <h3>For Visitors</h3>
                    <ul>
                        <li>Why Visit?</li>
                        <li>Who Can Visit?</li>
                        <li>How to Register?</li>
                        <li>How to Collaborate?</li>
                    </ul>
                </div>
            </div>
            
        </div>
        
        <!-- <img src="<?= asset('assets/img/element/who-element.png') ?>" alt="img" class="ff-who-element"> -->
    </section>
    
     @push('conversion_scripts')
        <script>
          gtag('event', 'conversion', {'send_to': 'AW-752081677/q_J8CKP6nJgBEI22z-YC'});
        </script>
        
        <script>fbq('track', 'Lead'); </script>
        @endpush
    @endsection