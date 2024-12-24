    @extends('layouts.allotherpages')

    @section('content')
        <section class="gallery-detailssection gallery-detailssection-2 overflow-hidden  white-bg m-60">
            <div class="container">
                <div class="thank-you-container">
                    <img src="<?= asset('assets/img/shape/check-tick.png') ?>" alt="Checkmark">

                    <h1 class="p1-clr">Thank you for submitting your details..</h1>
                </div>

                <div class="text-center mt-5">
                    <a href="{{asset('pdf/btf-workshop-details.pdf')}}" data-action="share/whatsapp/share" target="_blank" class="btn btn-danger">Download Brochure</a>
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
