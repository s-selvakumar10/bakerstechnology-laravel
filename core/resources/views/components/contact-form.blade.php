<div class="who-contact-wrap2 wow fadeInRight" data-wow-delay=".6s">
    <h3 class="white-clr text-uppercase">Have A Query?</h3>
    <p class="white-clr mb-10">Let's Help You With Your Enquiries!</p>
    <form action="{{route('contact-form')}}" method="POST" class="form row g-xl-4 g-3 mt-10">@csrf
        <div class="col-lg-6">
            <input type="text" name="name"  placeholder="Name">
            <div class="error name_error">
                <span class="text-danger  float-start small">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-lg-6">
            <input type="text"  name="mobile"  placeholder="Mobile">
            <div class="error mobile_error">
                <span class="text-danger  float-start small">
                    @error('mobile')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-lg-6">
            <input type="email"  name="email" placeholder="E-mail">
            <div class="error email_error">
                <span class="text-danger  float-start small">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>

        <div class="col-lg-6">
            <input type="text"  name="designation" placeholder="Designation">
            <div class="error designation_error">
                <span class="text-danger  float-start small">
                    @error('designation')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-lg-12">
                <input type="text"  name="company"  placeholder="Company">
            <div class="error company_error">
                <span class="text-danger  float-start small">
                    @error('company')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            
            
        </div>
        <div class="col-lg-12">
            <textarea name="message" rows="4" placeholder="Message"></textarea>
            <div class="error message_error">
                <span class="text-danger  float-start small">
                    @error('message')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-lg-12 mt-0">
           <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
          <div class="captcha-error text-danger text-start "> </div> 
        </div>

        <div class="col-lg-12">
            <button type="submit" class="cmn-btn text-capitalize">Submit Now</button><!-- cmn-primary2-->
        </div>
    </form>
</div>