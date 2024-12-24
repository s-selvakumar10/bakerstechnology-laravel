@extends('layouts.allotherpages')

@section('content')
    <section class="faq-section business-matchmaking-wrap section-padding __white-bg"><!-- p100-bg-->
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-center text-center"><!-- mb-40 -->
                <h2 class="wow fadeInDown black-clr" data-wow-delay=".3s">
                    Collaborate With The Best
                </h2>
                <p class="col-lg-8 black-clr">
                    Here is a quick and easy platform to meet the business tycoons, interact with them face to face and
                    kick-start promising collaborations. </p>
            </div>

            <div class="row g-xl-4 g-3 justify-content-center text-center"><!--mb-40-->
                <div class="d-flex flex-column"><!--min-vh-100-->
                    <div class="d-flex flex-column my-auto">
                        <main class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12"><!--col-xl-11-->
                                    <div class="form_container">
                                        <div class="col-lg-12">
                                            <form id="business-matchmaking" action="{{ route('business-matchmaking') }}" method="POST" class="form" >@csrf

                                                <!-- Step 1 -->
                                                <fieldset title="Step 1">
                                                    <legend> </legend>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group mb-0 custom-select">
                                                                <select id="name_prefix" name="name_prefix" class="form-control mb-0 quform_7_54">
                                                                    <option value="" selected="selected">
                                                                        Please select</option>
                                                                    @foreach ($name_prefixes ?? [] as $name_prefix)
                                                                        <option value="{{ $name_prefix }}"
                                                                            {{ old('name_prefix', '') == $name_prefix ? 'selected' : '' }}>
                                                                            {{ $name_prefix }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="error name_prefix_error">
                                                                <span class="text-danger  float-start small">
                                                                    @error('name_prefix')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group pb-3">                        
                                           
                                                                <input type="text" id="first_name" name="first_name"
                                                                    value="{{ old('first_name', '') }}" class="form-control mb-0"
                                                                    placeholder="Enter your first name *" spellcheck="false">
                                                                <div class="error first_name_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('first_name')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="last_name" name="last_name"
                                                                    value="{{ old('last_name', '') }}" class="form-control mb-0"
                                                                    placeholder="Enter your last name" spellcheck="false">
                                                                <div class="error last_name_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('last_name')
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
                                                                <input type="text" id="email" name="email" value="{{ old('email', '') }}"
                                                                    class="form-control mb-0" placeholder="Enter your email *" spellcheck="false">
                                                                <div class="error email_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('email')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="mobile" name="mobile" value="{{ old('mobile', '') }}"
                                                                    class="form-control mb-0" placeholder="Enter Mobile *" spellcheck="false">
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
                                                                <input type="text" id="company_name" value="{{ old('company_name', '') }}"
                                                                    name="company_name" class="form-control mb-0" placeholder="Enter Company Name *"
                                                                    spellcheck="false">
                                                                <div class="error company_name_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('company_name')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-0 custom-select">
                                                                <select id="products_of_interest" name="products_of_interest"
                                                                    class="form-control mb-0 quform_7_54">
                                                                    <option value="" selected="selected">
                                                                        Please select the products of interest *</option>
                                                                    @foreach ($products ?? [] as $product)
                                                                        <option value="{{ $product }}"
                                                                            {{ old('products_of_interest', '') == $product ? 'selected' : '' }}>
                                                                            {{ $product }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="error products_of_interest_error">
                                                                <span class="text-danger  float-start small">
                                                                    @error('products_of_interest')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 pb-3 ">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="description" name="description"
                                                                    value="{{ old('description', '') }}" class="form-control mb-0 quform_7_25"
                                                                    placeholder="Enter Description / Specification" spellcheck="false">
                                                                <div class="error description_error">
                        
                                                                    <span class="text-danger  float-start small">
                                                                        @error('description')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group d-flex"> 
                                                                <select   name="date" class="form-control">
                                                                    <option value="">Select a date</option>
                                                                    <option value="2025-01-28">January 28, 2025</option>
                                                                    <option value="2025-01-29">January 29, 2025</option>
                                                                    <option value="2025-01-30">January 30, 2025</option>
                                                                    <option value="2025-07-02">July 2, 2025</option>
                                                                    <option value="2025-07-03">July 3, 2025</option>
                                                                    <option value="2025-07-04">July 4, 2025</option>
                                                                </select>
                                  
                                                                <select id="time" name="time" class="form-control ms-1">
                                                                    <option value="">Select a time</option>
                                                                    <!-- Times from 10:00 AM to 5:00 PM in 30-minute intervals -->
                                                                    <option value="10:00:00">10:00 AM</option>
                                                                    <option value="10:30:00">10:30 AM</option>
                                                                    <option value="11:00:00">11:00 AM</option>
                                                                    <option value="11:30:00">11:30 AM</option>
                                                                    <option value="12:00:00">12:00 PM</option>
                                                                    <option value="12:30:00">12:30 PM</option>
                                                                    <option value="13:00:00">1:00 PM</option>
                                                                    <option value="13:30:00">1:30 PM</option>
                                                                    <option value="14:00:00">2:00 PM</option>
                                                                    <option value="14:30:00">2:30 PM</option>
                                                                    <option value="15:00:00">3:00 PM</option>
                                                                    <option value="15:30:00">3:30 PM</option>
                                                                    <option value="16:00:00">4:00 PM</option>
                                                                    <option value="16:30:00">4:30 PM</option>
                                                                    <option value="17:00:00">5:00 PM</option>
                                                                </select>
                                                            </div>

                                                            {{-- <div class="form-group pb-3">
                                                                <input type="datetime-local" id="date" name="date"  
                                                                    value="{{ old('date', '') }}" class="form-control mb-0 quform_7_25"
                                                                    placeholder="Enter Date" spellcheck="false">
                                                                <div class="error date_error"> 
                                                                    <span class="text-danger  float-start small">
                                                                        @error('date')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div> --}}

                                                            
                                                        </div>
                        
                                                    </div>
                        
                        
                                                </fieldset>
                                                <!-- Step 2 -->
                                                <fieldset title="Step 2">
                                                    <legend> </legend>
                        
                                                    <div class="row">
                        
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="department" name="department"
                                                                    value="{{ old('department', '') }}" class="form-control mb-0"
                                                                    placeholder="Enter your Department *" spellcheck="false">
                                                                <div class="error department_error">
                                                                    <span class="text-danger  float-start small">
                                                                        @error('department')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                        
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="designation" name="designation"
                                                                    value="{{ old('designation', '') }}" class="form-control mb-0"
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
                        
                                                    </div>
                        
                                                    <div class="row text-center mt-2">
                                                        <h4>ADDRESS FOR COMMUNICATION</h4>
                                                    </div>
                        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="company_address"
                                                                    value="{{ old('company_address', '') }}" name="company_address"
                                                                    class="form-control mb-0" placeholder="Enter Company Address *"
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
                                                                <input type="text" id="city" name="city"
                                                                    value="{{ old('city', '') }}" class="form-control mb-0"
                                                                    placeholder="Enter City *" spellcheck="false">
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
                                                                <select id="country" name="country" class="country form-control mb-0">
                                                                    <option value="" selected="selected">
                                                                        Please select the Country *</option>
                                                                    @foreach ($countries ?? [] as $country)
                                                                        <option value="{{ $country }}"
                                                                            {{ old('country', '') == $country ? 'selected' : '' }}>
                                                                            {{ $country }}</option>
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
                                                                <select id="state" name="state" class="state form-control mb-0 quform_7_54">
                                                                    <option value="" selected="selected">
                                                                        Please select the State *</option>
                                                                     
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
                        

                                                    </div>
                        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="zip_code" name="zip_code"
                                                                    value="{{ old('zip_code', '') }}" class="form-control mb-0 quform_7_25"
                                                                    placeholder="Enter Postal / Zip Code *" spellcheck="false">
                                                                <div class="error zip_code_error">
                        
                                                                    <span class="text-danger  float-start small">
                                                                        @error('zip_code')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                        
                                                        <div class="col-md-6">
                                                            <div class="form-group pb-3">
                                                                <input type="text" id="company_website" name="company_website"
                                                                    value="{{ old('company_website', '') }}"
                                                                    class="form-control mb-0 quform_7_25" placeholder="Enter Company Website *"
                                                                    spellcheck="false">
                                                                <div class="error company_website_error">
                        
                                                                    <span class="text-danger  float-start small">
                                                                        @error('company_website')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group pb-3">
                                                                <!--<div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>-->
                                                                
                                                                  <div>
                                                                 {{$captcha_data['n1']}} + {{$captcha_data['n2']}} = <input type="text" name="captcha_value" style="color:black;width: 70px;">
                                                                 </div>
                                                                <div class="captcha-error text-danger text-center "> </div>
                                                            </div>
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
 
      
@endsection
