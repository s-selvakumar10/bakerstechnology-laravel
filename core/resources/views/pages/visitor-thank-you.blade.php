    @extends('layouts.allotherpages')

    @section('content')
        <section class="gallery-detailssection gallery-detailssection-2 overflow-hidden  white-bg m-60">
            <div class="container">
                <div class="thank-you-container">
                    <img src="<?= asset('assets/img/shape/check-tick.png') ?>" alt="Checkmark">

                    {{-- <h1 class="p1-clr">Thank you for contacting us,</h1>
                <p>Our team will get back to you in a short while.</p> --}}
                    <h1 class="p1-clr">You have Registered Successfully..</h1>
                </div>

                <div  class="text-center">
                    <img class="lazy loaded" decoding="async"
                        src="{{$qr_image ?? ''}}"
                        data-src="data:image/png;base64,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"
                        width="200" height="200&quot;" data-was-processed="true">
                    <div>
                        <h5 style="margin-top: 0px;margin-bottom: 22px;" class="text-center">ID : {{$registration_id}}</h5>
                        <div style="padding-bottom: 22px;" class="text-center">
                            <a href="{{route('visitor-pass-download',$visitor_id)}}" target="_blank"
                                style=" margin-bottom:10px !important;font-size: 14px !important; "
                                class="btn btn-sm btn-danger">Download the Badge</a>
                        </div>

                        <a href="{{$social_media_share['whatsapp']}}"
                            data-action="share/whatsapp/share" target="_blank"
                            class="btn btn-success">Invite via Whatsapp</a>

                        <a href="{{$social_media_share['linkedin']}}"
                            data-action="share/linkedin/share" target="_blank"
                            class="btn btn-primary">Invite via Linkedin</a>

                        <a href="{{$social_media_share['googleCalendar']}}"
                            data-action="share/googleCalendar/share" target="_blank"
                            class="btn btn-warning">Add to Google Calender</a>

                        <a href="{{$social_media_share['outlookCalender']}}"
                            data-action="share/outlookCalender/share" target="_blank" download="calendar.ics"
                            class="btn btn-info">Add to Outlook
                            Calendar</a>
                    </div>

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
