@extends('layouts.allotherpages', [
    'title' => 'Exhibitor Registration - Bakers Technology Fair 2025',
    'meta_desc' => 'Join us as an exhibitor at the Food & Drinks Processing Expo. Gain visibility, network with professionals, and promote your innovations in the food industry.',])

@section('content')
    <section class="faq-section exhibitor-registration-wrap section-padding pb-0"><!-- p100-bg-->
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-center text-center">
                <h2 class="wow fadeInDown black-clr" data-wow-delay=".3s">
                    Enquire Today! Reap Benefits!
                </h2>
                <p class="col-lg-8 black-clr"> <!-- p700-clr-->
                    Gain exposure, build your brand, get acquainted with the business tycoons and master the latest
                    technologies and trends! </p>
            </div>
            <div class="row g-xl-4 g-3 justify-content-center text-center"><!-- mb-40-->
                <div class="d-flex flex-column"><!--min-vh-100 -->
                    <div class="d-flex flex-column my-auto">
                        <main class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12"><!--col-xl-11-->
                                    <div class="form_container">
                                        <div class="col-lg-12">
                                            <form id="exhibitor-registration" action="{{ route('exhibitor-registration') }}"
                                                method="POST" class="form">@csrf
                                                <input type="hidden" name="quform_form_id" value="7">
                                                <input type="hidden" name="quform_form_uid" value="e7663e">
                                                <input type="hidden" name="quform_count" value="2">
                                                <input type="hidden" name="form_url"
                                                    value="https://www.fdpexpo.com/exhibitor-registration/">
                                                <input type="hidden" name="referring_url" value="https://www.fdpexpo.com/">
                                                <input type="hidden" name="post_id" value="34">
                                                <input type="hidden" name="post_title" value="Exhibitor Registration">
                                                <input type="hidden" name="quform_current_page_id" value="1">
                                                <input id="website" name="website" type="text" value="">
                                                <!-- Step 1 -->
                                                <fieldset title="Step 1">
                                                    <legend> </legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="name" name="name" value="{{old('name','')}}"
                                                                    class="form-control mb-0"
                                                                    placeholder="Enter your name *" spellcheck="false">
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
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="organization" name="organization" value="{{old('organisation','')}}"
                                                                    class="form-control mb-0"
                                                                    placeholder="Enter your Organisation *"
                                                                    spellcheck="false">
                                                                <div class="error organization_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('organisation')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="designation" name="designation"  value="{{old('designation','')}}"
                                                                    class="form-control mb-0"
                                                                    placeholder="Enter your Designation *" spellcheck="false">
                                                                <div class="error designation_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('designation')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="mobile" name="mobile" value="{{old('mobile','')}}"
                                                                    class="form-control mb-0" placeholder="Enter Mobile *"
                                                                    spellcheck="false">
                                                                <div class="error mobile_error">
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
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="whatsapp_number" value="{{old('whatsapp_number','')}}"
                                                                    name="whatsapp_number" class="form-control mb-0"
                                                                    placeholder="Enter Whatsapp Number" spellcheck="false">
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
                                                            <div class="form-group pb-3">
                                                                <input type="email" id="email" name="email" value="{{old('email','')}}"
                                                                    class="form-control mb-0"
                                                                    placeholder="Enter your Email *">
                                                                <div class="error email_error">
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
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="company_address" value="{{old('company_address','')}}"
                                                                    name="company_address" class="form-control mb-0"
                                                                    placeholder="Enter Company Address"
                                                                    spellcheck="false">
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
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="city" name="city" value="{{old('city','')}}"
                                                                    class="form-control mb-0" placeholder="Enter City *"
                                                                    spellcheck="false">
                                                                <div class="error city_error"> 
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
                                                        
                                                         <div class="col-md-6 pb-3">
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
                                                        
                                                        
                                                        <div class="col-md-6 pb-3 ">
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
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="zip_code" name="zip_code"  value="{{old('zip_code','')}}"
                                                                    class="form-control mb-0 quform_7_25"
                                                                    placeholder="Enter Postal / Zip Code *"
                                                                    spellcheck="false">
                                                                <div class="error zip_code_error">

                                                                    <span class="text-danger  float-start small">
                                                                        @error('zip_code')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
 
                                                       


                                                    </div>

                                                </fieldset>
                                                <!-- Step 2 -->
                                                <fieldset title="Step 2">
                                                    <legend> </legend>

                                                    <div class="col-md-12">
                                                        <div class="form-group pb-3">
                                                            <input type="text" id="stand_space" name="stand_space" value="{{old('stand_space','')}}"
                                                                class="form-control mb-0" spellcheck="false"
                                                                placeholder="Stand Space Required">
                                                            <div class="error stand_space_error">
                                                                <span class="text-danger  float-start small">
                                                                    @error('stand_space')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group pb-3">
                                                            <input type="text" id="sponsorship" name="sponsorship" value="{{old('sponsorship','')}}"
                                                                class="form-control mb-0" spellcheck="false"
                                                                placeholder="Sponsorship Type Required">
                                                            <div class="error sponsorship_error">
                                                                <span class="text-danger  float-start small">
                                                                    @error('sponsorship')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group pb-3">
                                                            <input type="text" id="advertisement" name="advertisement" value="{{old('advertisement','')}}"
                                                                class="form-control mb-0" spellcheck="false"
                                                                placeholder="Advertisement Required">
                                                            <div class="error advertisement_error">
                                                                <span class="text-danger  float-start small">
                                                                    @error('advertisement')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group pb-3">
                                                            <input type="text" id="others" name="others" value="{{old('others','')}}"
                                                                class="form-control mb-0" spellcheck="false"
                                                                placeholder="Others">
                                                            <div class="error others_error">
                                                                <span class="text-danger  float-start small">
                                                                    @error('others')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <div>
                                                                <input type="checkbox" name="accept_promotional_updates" {{ old('accept_promotional_updates','') != '' ? 'checked'  : ''}}
                                                                    id="accept_promotional_updates" class=""
                                                                    value="You may contact me for future updates and promotions">
                                                                <label for="quform_7_59_ecec3c_1"
                                                                    class="quform-option-label quform-option-label-7_59_1"><span
                                                                        class="quform-option-text">You may contact me for
                                                                        future updates and promotions</span></label>
                                                            </div>
                                                            <div class="error accept_promotional_updates_error">
                                                                <span class="text-danger small">
                                                                    @error('accept_promotional_updates')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group pb-3">
                                                            <!--<div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>-->
                                                            
                                                            <div>
                                                            {{$captcha_data['n1']}} + {{$captcha_data['n2']}} = <input type="text" name="captcha_value" style="color:black;width: 70px;">
                                                            </div>
                                                            <div class="captcha-error text-danger text-center "> </div>
                                                         </div>
                                                    </div>

                                                        
                                                </fieldset>

                                                <input type="submit" class="finish" value="Finish!">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden section-padding white-bg">
        <div class="container">
            <div class="row gy-40 justify-content-center flex-row-reverse">
                <div class="col-xl-4 col-lg-10">
                    <div class="ps-xl-5 text-xl-start text-center">
                        <div class="title-area mb-32">
                            <!-- <span class="sub-title2"><span class="text">Tariff</span></span> -->
                            <h2 class="wow fadeInUp mb-20 black-clr">Tariff</h2>
                            <p class="p700-clr mb-20">All Payments should be made by <b>DD/Cheque</b> in favour of</p>
                            <h5 class="wow fadeInUp gold-clr mb-20">Synergy Exposures & Events India Pvt Ltd</h5><!--theme-clr-->
                            <h5 class="wow fadeInUp p700-clr mb-20">50% at the time of bookings</h5>
                            <h5 class="wow fadeInUp p700-clr mb-20">Balance 50% one month prior to the show</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row gy-30">

                        <div class="col-md-6">
                            <div class="price-box ">
                                <div class="box-top">
                                    <h5 class="white-clr mb-10">Indian Participation</h5>

                                    <p class="box-text">Built-up stall (min 9 Sq.m.) : </p>
                                    <span>INR <h3 class="box-price"> 10000/Sq.m</h3></span>
                                    <p class="box-text">Bare space (min 36 Sq.m.) : </p>
                                    <span>INR <h3 class="box-price">9500/sqm</h3></span>

                                    <!-- <a href="shop-details.html" class="th-btn style2">Get Tickets Now</a> -->
                                </div>
                                <div class="box-bottom">
                                    <div class="checklist available-list">
                                        <ul>
                                            <li><i class="fal fa-circle-check"></i> Extra 10% premium charges
                                                applicable for two-side open booths</li>
                                            <li><i class="fal fa-circle-check"></i> Extra 20% premium charges
                                                applicable for three-side open booths.</li>
                                            <li><i class="fal fa-circle-check"></i> GST Extra.</li>
                                            <li><i class="fal fa-circle-check"></i> TDS @ 2% to be deducted on payments
                                                under contracts and form 16A to be provided for the same.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="price-box active">
                                <div class="box-top">
                                    <h5 class="white-clr mb-10">International Participation</h5>
                                    <p class="box-text">Shell Scheme (Min 9 sqm): </p>
                                    <span>USD <h3 class="box-price"> 225/sqm</h3></span>
                                    <p class="box-text">Bare Scheme (Min 36 sqm): </p>
                                    <span>USD <h3 class="box-price">200/sqm</h3></span>
                                    <!-- <a href="shop-details.html" class="th-btn style2">Get Tickets Now</a> -->
                                </div>
                                <div class="box-bottom">
                                    <div class="checklist available-list">
                                        <ul>
                                            <li><i class="fal fa-circle-check"></i> Extra 10% premium charges
                                                applicable for two-side open booths</li>
                                            <li><i class="fal fa-circle-check"></i> Extra 20% premium charges
                                                applicable for three-side open booths.</li>
                                            <li><i class="fal fa-circle-check"></i> GST Extra.</li>
                                            <li><i class="fal fa-circle-check"></i> TDS @ 2% to be deducted on payments
                                                under contracts and form 16A to be provided for the same.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
