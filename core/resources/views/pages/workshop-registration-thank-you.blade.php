    @extends('layouts.allotherpages')

    @section('content') 

      <section class="gallery-detailssection gallery-detailssection-2 overflow-hidden  white-bg m-60">
      <div class="container">
            <div class="thank-you-container">
                <img src="<?= asset('assets/img/shape/check-tick.png') ?>" alt="Checkmark">
                
                <h1 class="p1-clr">Thank you for registering for the Bakery & Café Mastery Workshop 2025! We are delighted to have you on board for this exciting and insightful sessions.</h1>
                
                <br>
                <p id="registration_id">  </p>
                
                <p>Upon successful payment validation, we will email your personalized badge, which will also grant you access to the concurrent expos.  
                
                We look forward to seeing you at the event!</p>
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
    @endsection
    @push('scripts')
    <script>
       $(document).ready(function(){
           if(sessionStorage.getItem("registration_id")  !== null){
               $('#registration_id').text(`### Your Unique ID: *${sessionStorage.getItem("registration_id")}* `)
           }
       });
    </script>
    @endpush