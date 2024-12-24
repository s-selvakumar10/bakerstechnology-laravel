@extends('layouts.allotherpages', [
    'title' => 'Register for Certified Workshop on Bakery & Cafe',
    'meta_desc' => '',])


    @section('content')
         @php
          $day_1_image_path = storage_path('app/qr/workshop-day-1.jpg'); //url('core/storage/app/qr/workshop-day-1.jpg')
          $day_2_image_path = storage_path('app/qr/workshop-day-2.jpg'); //url('core/storage/app/qr/workshop-day-2.jpg');
          $day_3_image_path = storage_path('app/qr/workshop-day-3.jpg'); //url('core/storage/app/qr/workshop-day-3.jpg');
          $qr_1 ='data:image/jpg;base64,'.base64_encode(file_get_contents($day_1_image_path));
          $qr_2 ='data:image/jpg;base64,'.base64_encode(file_get_contents($day_2_image_path));
          $qr_3 ='data:image/jpg;base64,'.base64_encode(file_get_contents($day_3_image_path));
         @endphp
        <section class="faq-section exhibitor-registration-wrap section-padding workshop-registration-wrap" ><!--  pb-0 -->
            <div class="container">
                <div class="row align-items-center pb-5">
                    <div class="col-md-6 text-center"> <img src="<?= asset('assets/img/whitecaps-bakers-logo.jpg') ?>" alt="img" class="img-fluid"></div>
                    <div class="col-md-6 text-start text-center avail_seats_wrap">
                        <h2>Available seats</h2>
                        <table class="w-100 text-dark ">
                            <tr>
                                 <th>Day 1 <br> (28 JAN 2025)</th>
                                 <th>Day 2 <br> (29 JAN 2025)</th>
                                 <th>Day 3 <br> (30 JAN 2025)</th>
                            </tr>
                             <tr>
                                 <td>{{($registration_left['day_1'] > 0) ? $registration_left['day_1'] : '0'}} seats</td>
                                 <td>{{($registration_left['day_2'] > 0) ? $registration_left['day_2'] : '0'}} seats</td>
                                 <td>{{($registration_left['day_3'] > 0) ? $registration_left['day_3'] : '0'}} seats</td>
                            </tr>
                        </table>
                    </div>
                </div>
              
              
                <div class="row g-xl-4 g-3 justify-content-center text-center"><!-- mb-40-->
                    <h3 class="important_note">"Important Notice: Entry for Trade Visitors above 18 Years Only"</h3>
                    <div class="d-flex flex-column"><!--min-vh-100 -->
                        <div class="d-flex flex-column my-auto">
                            <main class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12"><!--col-xl-11-->
                                        <div class="form_container">
                                            <div class="col-lg-12">
                                                <form action="{{ route('certified-workshop.store') }}"
                                                    enctype="multipart/form-data" id="certified-workshop" method="POST"
                                                    class="form text-dark">@csrf
                                                   
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="name"
                                                                    class="form-control mb-0" placeholder="Name">
                                                                <label class="text-muted" >Name <span
                                                                        class="text-danger">*</span></label>
                                                                <small class="float-start text-danger name_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="designation"
                                                                    class="form-control mb-0" placeholder="Designation">
                                                                <label class="text-muted" >Designation
                                                                    <span class="text-danger">*</span></label>
                                                                <small class="float-start text-danger designation_err err ">
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="company_name"
                                                                    class="form-control mb-0" placeholder="company name">
                                                                <label class="text-muted">Company Name
                                                                    <span class="text-danger">*</span></label>
                                                                <small
                                                                    class="float-start text-danger company_name_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="address"
                                                                    class="form-control mb-0" placeholder="Address">
                                                                <label class="text-muted" >Address</label>
                                                                <small class="float-start text-danger address_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="city"
                                                                    class="form-control mb-0" placeholder="City">
                                                                <label class="text-muted" >City <span
                                                                        class="text-danger">*</span></label>
                                                                <small class="float-start text-danger city_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating" style="border-bottom: 2px solid #e8ebed;">
                                                                <select name="country" class="form-select country border-0" onfocus="this.style.boxShadow = 'unset';"
                                                                    aria-label="Select country">
                                                                    <option value="" selected="selected"> Please
                                                                        select the Country</option>
                                                                    @foreach ($countries ?? [] as $country)
                                                                        <option value="{{ $country }}">
                                                                            {{ $country }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label>Country <span class="text-danger">*</span></label>
                                                                <small class="float-start text-danger country_err err ">
                                                                </small>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating" style="border-bottom: 2px solid #e8ebed;">
                                                                <select name="state" class="state form-select border-0" onfocus="this.style.boxShadow = 'unset';"
                                                                    aria-label="Select state">
                                                                    <option value="" selected="selected"> Please
                                                                        select the State </option>
                                                                    @foreach ($states ?? [] as $state)
                                                                        <option value="{{ $state }}">
                                                                            {{ $state }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <label>State <span class="text-danger">*</span></label>
                                                                <small class="float-start text-danger state_err err ">
                                                                </small>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="zip_code"
                                                                    class="form-control mb-0" placeholder="Zip code">
                                                                <label class="text-muted" >Zip code</label>
                                                                <small class="float-start text-danger zip_code_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="mobile"
                                                                    class="form-control mb-0" placeholder="Mobile">
                                                                <label class="text-muted" >Mobile
                                                                    <span class="text-danger">*</span></label>
                                                                <small class="float-start text-danger mobile_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="whatsapp_number"
                                                                    class="form-control mb-0"
                                                                    placeholder="whatsapp number">
                                                                <label class="text-muted">Whatsapp
                                                                    number <span class="text-danger">*</span></label>
                                                                <small
                                                                    class="float-start text-danger whatsapp_number_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="email"
                                                                    class="form-control mb-0" placeholder="email">
                                                                <label class="text-muted">Email <span
                                                                        class="text-danger">*</span></label>
                                                                <small class="float-start text-danger email_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="website"
                                                                    class="form-control mb-0" placeholder="Website">
                                                                <label class="text-muted" >Website</label>
                                                                <small class="float-start text-danger website_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" name="industry"
                                                                    class="form-control mb-0" placeholder="industry">
                                                                <label class="text-muted" >Industry
                                                                    you represent <span
                                                                        class="text-danger">*</span></label>
                                                                <small class="float-start text-danger industry_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6 mb-3 text-start" >
                                                             <a href="/pdf/btf-workshop-details.pdf" target="_blank" ><u>Workshop details</u></a>
                                                         </div>
                                                    </div>
                                                     <div class="row mt-3"> 
                                                        <div class="col-6 mb-3">
                                                            <div class="d-flex flex-column align-items-start">
                                                                
                                                                    <div class="float-start">
                                                                        <input type="checkbox" name="days[]" value="all-days" id="all-days" class="day-checkbox all-days">
                                                                        <label for="all-days"> All Days</label>
                                                                    </div>
                                                                    
                                                                    <div class="float-start days-container ">
                                                                        <div>
                                                                            <input type="checkbox" id="day-1" class="day-checkbox" name="days[]" value="1"> 
                                                                            <label for="day-1" class="me-4"> Day 1 (28 JANUARY, 2025)</label>  
                                                                            
                                                                        </div>
                                                                        <div>
                                                                            <input type="checkbox" id="day-2" class="day-checkbox" name="days[]" value="2"> 
                                                                            <label for="day-2" class="me-4"> Day 2 (29 JANUARY, 2025)</label> 
                                                                        </div>
                                                                        <div>
                                                                            <input type="checkbox" id="day-3" class="day-checkbox" name="days[]" value="3"> 
                                                                            <label for="day-3" class="me-4"> Day 3 (30 JANUARY, 2025)</label>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                    <small class=" text-danger days_err err "> </small>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-6 mb-3">
                                                                 <span class="day-1-price d-none"> <img src="{{ $qr_1}}" alt="img" width="300"> </span> 
                                                                 <span class="day-2-price d-none"> <img src="{{ $qr_2}}" alt="img" width="300"> </span> 
                                                                 <span class="day-3-price d-none"> <img src="{{ $qr_3}}" alt="img" width="300"> </span> 
                                                                
                                                        </div>
                                                        
                                                        
                                                         <div class="col-md-6 mb-3">
                                                            <div class="form-floating">
                                                                
                                                                <input type="text" name="utr_number"
                                                                    class="form-control mb-0 mt-3" placeholder="utr_number">
                                                                <label class="text-muted" >UTR Number
                                                                    <span class="text-danger">*</span></label>
                                                                <small class="float-start text-danger utr_number_err err ">
                                                                </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <div>
                                                                <label class="float-start">Payment Screenshot</label>
                                                                <input type="file" name="attachment" id="attachment"
                                                                    class="form-control mb-0" placeholder="attachment" style="padding: 10px;">
                                                                <small class="float-start text-danger attachment_err err "></small>
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="col-md-12">
                                                            <div class="form-group pb-3 mt-3">
                                                                <div>
                                                                    {{ $captcha_data['n1'] }} + {{ $captcha_data['n2'] }} =
                                                                    <input type="text" name="captcha_value"
                                                                        style="color:black;width: 70px;">
                                                                </div>
                                                                <div
                                                                    class="captcha-error text-danger text-center captcha_value_err err">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>


                                                    <input type="submit" class="finish" id="certified-workshop-submit" value="Finish!">
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
    
    @push('scripts')
    <script>
    
         $(document).on('click', '#certified-workshop-submit', function (e) {
        		e.preventDefault(); 
        		var _this = $('#certified-workshop')[0];
        		var formData = new FormData(_this);
        		var url = $(_this).attr('action');
        	
        		 
        		$.ajax({
        			url: url,
        			type: 'POST',
        			data: formData,
        			processData: false,
        			contentType: false,
        		}).done(function (res) {
        			
        			if (res.status) {
        			   sessionStorage.setItem("registration_id", res.reg_id);
        				if(res.msg){
        					Swal.fire({
        						icon: "success",
        						text: res.msg,
        					}).then(function(isConfirm) {                
        						if (isConfirm) {
        						  window.location.href = res.redirect_url;
        						}
        					});
        					
        					 setTimeout(function(){
                              window.location.href = res.redirect_url;
                            },3000);
        				} else {
        					window.location.href = res.redirect_url;
        				}
        			} else {
        				Swal.fire({
        					icon: "error", 
        					text: res.msg || "Something went wrong!",
        				});
        			}
        	
        		}).fail(function (xhr) {
        			if (xhr.responseJSON && xhr.responseJSON.errors) {
        				$(_this).find('.err').text('');
        	
        				var errClass = '';
        	
        				$.each(xhr.responseJSON.errors, function (name, msg) {
        					var name = name.replace(/\./g, '_');
        	
        					$(_this).find('.' + name + '_err').text(msg);
        					if (errClass == '') {
        						errClass = '.' + name + '_err';
        					}
        	
        				});
        	
        				if (errClass) {
        					var errorElement = $(_this).find(errClass);
        					if (errorElement.length > 0) {
        						$('html, body').animate({
        							scrollTop: errorElement.offset().top - 200 // Adjust as needed
        						}, 500);
        					}
        				}
        	
        			} else{
        
        				 if (xhr.responseJSON && xhr.responseJSON.message) {
        					console.error(xhr.responseJSON.message); 
        				}
        
        				Swal.fire({
        					icon: "error",
        					title: "Oops...",
        					text:  "Something went wrong!",
        				});
        			}
        		});
        	});
        	//daysToggle();
        	// $('#all-days').on('click',daysToggle);
        	// function daysToggle(){
        	// 	if($('#all-days').is(':checked')){
        	// 		$('.days-container').addClass('d-none');
        	// 	}else{
        	// 		$('.days-container').removeClass('d-none');
        	// 	}
        	// }
            $('#all-days').on('change', function(){
                console.log($(this).is(':checked'));
                if($(this).is(':checked')){
                    $('#day-1, #day-2, #day-3').prop('checked', false);
                    $('.days-container').addClass('d-none');
                } else {
                    $('.days-container').removeClass('d-none');
                }
            })
           $('.day-checkbox').on('click', function(){

               var dayVal = 0;
               
                if($('#all-days').is(':checked')){
                    dayVal = 3;
                }else{ 
                    if($('#day-1').is(':checked')){
                        dayVal += 1;
                    }
                    if($('#day-2').is(':checked')){
                        dayVal += 1;
                    }
                    if($('#day-3').is(':checked')){
                        dayVal += 1;
                    } 
               }
              
              if(dayVal == 1){
                  $('.day-1-price').removeClass('d-none');
                  $('.day-2-price').addClass('d-none');
                  $('.day-3-price').addClass('d-none');
              }else if(dayVal == 2){
                  $('.day-1-price').addClass('d-none');
                  $('.day-2-price').removeClass('d-none');
                  $('.day-3-price').addClass('d-none');
              }else if(dayVal == 3){
                  $('.day-1-price').addClass('d-none');
                  $('.day-2-price').addClass('d-none');
                  $('.day-3-price').removeClass('d-none');
              }else{
                  $('.day-1-price').addClass('d-none');
                  $('.day-2-price').addClass('d-none');
                  $('.day-3-price').addClass('d-none');
              }
            
            
           
               
           });
    	
    </script>
    @endpush
