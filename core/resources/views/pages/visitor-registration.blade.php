    @extends('layouts.allotherpages', [
    'title' => 'Visitor Registration: Your Gateway to the Expo Experience',
    'meta_desc' => 'Register now for the Food & Drinks Processing Expo. Experience cutting-edge technologies and network with professionals in the food and beverage industry.',])

@push('meta')

	 <meta property="og:title" content="Bakers Technology Fair 2025" />
     <meta property="og:image" itemprop="image" content="https://bakerstechnologyfair.com/assets/img/og/linkedin.jpg" />
     <meta property="og:description" content="Bakers Technology Fair 2025" />
     <meta property="og:url" content="https://bakerstechnologyfair.com/visitor-registration"> 
     <meta property="og:type" content="article">
	
@endpush


    @section('content')
        <section class="faq-section visitor-registration-wrap section-padding "><!--p100-bg-->
            <div class="container">
                <div class="row g-xl-4 g-3 justify-content-center text-center">
                    <h2 class="wow fadeInDown black-clr" data-wow-delay=".3s">
                        Be A Part! Gain Exposure
                    </h2>
                    <p class="col-lg-8 black-clr">
                    Take part in one of the most coveted Bakery Expo! Gain Exposure and aim for bigger business targets!</p>
                    <h3 class="important_note">"Important Notice: Entry for Trade Visitors above 18 Years Only"</h3>
                </div>
                <div class="row g-xl-4 g-3 justify-content-center text-center"><!-- mb-40 -->
                    <div class="d-flex flex-column"><!--min-vh-100 -->
                        <div class="d-flex flex-column my-auto">
                            <main class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12"><!--col-xl-11-->
                                        <div class="form_container">
                                            <div class="col-lg-12">
                                                <form id="custom" action="{{ route('visitor-registration') }}"
                                                    method="POST" class="form"> @csrf
                                                    <input id="website" name="website" type="text"
                                                        value=""><!-- Leave for security protection, read docs for details. Delete this comment before to publish. -->
                                                    <fieldset title="Step 1">
                                                        <legend> </legend>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group pb-3">
                                                                    <input type="text" name="name"
                                                                        class="form-control mb-0" placeholder="Name *"
                                                                        value="{{ old('name', '') }}">
                                                                    <div class="error name_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="organization"
                                                                        value="{{ old('organization', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Organisation *">
                                                                    <div class="error  organization_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('organization')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="designation"
                                                                        value="{{ old('designation', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Designation *">
                                                                    <div class="error  designation_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('designation')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="mobile"
                                                                        value="{{ old('mobile', '') }}"
                                                                        class="form-control  mb-0" placeholder="Mobile *">
                                                                    <div class="error  mobile_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('mobile')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="whatsapp_number"
                                                                        value="{{ old('whatsapp_number', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Whatsapp Number *">
                                                                    <div class="error whatsapp_number_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('whatsapp_number')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="email"
                                                                        value="{{ old('email', '') }}"
                                                                        class="form-control  mb-0" placeholder="Email *">
                                                                    <div class="error  email_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('email')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="company_address"
                                                                        value="{{ old('company_address', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Company Address">
                                                                    <div class="error company_address_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('company_address')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="city"
                                                                        value="{{ old('city', '') }}"
                                                                        class="form-control  mb-0" placeholder="City *">
                                                                    <div class="error  city_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('city')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group mb-0 custom-select">
                                                                    <select id="country" name="country"  
                                                                        class="country form-control mb-0">
                                                                        <option value="" selected="selected">
                                                                            Please select the Country *</option>
                                                                            @foreach ($countries ?? [] as $country)
                                                                            <option value="{{$country}}"  {{old('country','') == $country ? 'selected' : ''}}>
                                                                               {{$country}}</option>
                                                                            @endforeach
                                                                    </select>
    
                                                                </div>
                                                                <div class="error country_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('country')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-0 custom-select">
                                                                    <select id="state" name="state"
                                                                        class="state form-control mb-0 quform_7_54">
                                                                        <option value="" selected="selected">
                                                                            Please select the State *</option>
                                                                         @foreach ($states ?? [] as $state)
                                                                         <option value="{{$state}}"  {{old('state','') == $state ? 'selected' : ''}}>
                                                                            {{$state}}</option>
                                                                         @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="error state_error"> 
                                                                    <span class="text-danger  float-start small">
                                                                        @error('state')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6 pt-3">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="zip_code"
                                                                        value="{{ old('zip_code', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Postal / Zip Code *">
                                                                    <div class="error  zip_code_error">
                                                                        <span class="text-danger  float-start small">
                                                                            @error('zip_code')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                           
                                                        </div>
                                                          

                                                    </fieldset><!-- End Step one -->
                                                    <fieldset title="Step 2">
                                                        <legend> </legend>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="industry"
                                                                        value="{{ old('industry', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Representing Industry">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="purpose_of_attendance"
                                                                        value="{{ old('purpose_of_attendance', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Purpose of Attending the Expo">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="products_of_interest"
                                                                        value="{{ old('products_of_interest', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="Products you are Interested in Sourcing">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group  pb-3">
                                                                    <input type="text" name="expo_referral_source"
                                                                        value="{{ old('expo_referral_source', '') }}"
                                                                        class="form-control  mb-0"
                                                                        placeholder="How Did You Know About This Expo">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group  pb-3 terms">
                                                            <div>
                                                                <input type="checkbox" name="accept_promotional_updates"
                                                                    {{ old('accept_promotional_updates', '') != '' ? 'checked' : '' }}
                                                                    id="accept_promotional_updates" class=""
                                                                    value="You may contact me for future updates and promotions">
                                                                <label for="quform_7_59_ecec3c_1"
                                                                    class="quform-option-label quform-option-label-7_59_1"><span
                                                                        class="quform-option-text">You may contact me for
                                                                        future updates and promotions</span></label>
                                                            </div>
                                                        </div>
                                                       <!--<div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>-->
                                                       
                                                          <div>
                                                            {{$captcha_data['n1']}} + {{$captcha_data['n2']}} = <input type="text" name="captcha_value" style="color:black;width: 70px;">
                                                        </div>
                                                        
                                                         <div class="captcha-error text-danger text-center  "> </div>
                                                    </fieldset><!-- End Step three -->
                                                    <input type="submit" class="finish" value="Finish!">
                                                </form>
                                            </div>
                                        </div><!-- /Form_container -->

                                    </div>
                                </div>
                                <!-- End row -->
                            </main>
                        </div>
                        <!-- /flex-column -->
                    </div>
                </div>
            </div>
        </section>
    @endsection
