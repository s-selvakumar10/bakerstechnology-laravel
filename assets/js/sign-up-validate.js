/* FORM WIZARD VALIDATION SIGN UP ======================================== */

jQuery(function ($) {
    "use strict";
$.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Only letters are allowed.");
    // Chose here which method to send the email, available:
    // Phpmaimer text/html > phpmailer/registration_phpmailer.php
    // Phpmaimer text/html SMPT > phpmailer/registration_phpmailer_smtp.php
    // PHPmailer with html template > phpmailer/registration_phpmailer_template.php
    // PHPmailer with html template SMTP> phpmailer/registration_phpmailer_template_smtp.php

    // $('form#custom').attr('action', 'phpmailer/registration_phpmailer_template.php');

    $('#custom').stepy({
        backLabel: 'Previous',
        block: true,
        errorImage: false,
        next:function () {
            $('.error').find('span').text( '' );            
        },
        nextLabel: 'Next',
        titleClick: true,
        description: true,
        legend: false,
        validate: true
    });
    $('#exhibitor-registration').stepy({
        backLabel: 'Previous',
        block: true,
        errorImage: false,
        next:function () {
            $('.error').find('span').text( '' );            
        },
        nextLabel: 'Next',
        titleClick: true,
        description: true,
        legend: false,
        validate: true
    });

     $('#business-matchmaking').stepy({
            backLabel: 'Previous',
            block: true,
            errorImage: false,
            next: function () {
                $('.error').find('span').text('');
            },
            nextLabel: 'Next',
            titleClick: true,
            description: true,
            legend: false,
            validate: true
        });
    // $('.stepy-error').addClass('d-none');
 
    $('#custom').validate({
        focusInvalid: false,
        errorPlacement: function(error, element) {   
            $('.'+element[0].name+'_error').find('span').text( error[0].innerText); 
            // $('#custom .stepy-error').append(error);
        },
        rules: {
            'name': {
                required: true,
                lettersonly: true,
            },
            'organization':{
                required: true, 
            },
            'designation': {
                required: true, 
            },
            'mobile':  {
                required: true,
                digits: true
            },
            'whatsapp_number':  {
                required: true,
                digits: true
            },
             'email': {
                required: true,
                email: true
            },
            // 'company_address': 'required', 
            'city': 'required',
            'state': 'required',
            'zip_code': 'required',
            'country': 'required', 
        },
        messages: {
            'name': { 
                required: 'Name required'
                },
            'organization': { required: 'Organisation name required' },
            'designation': { required: 'Designation name required' },
            'mobile': { required: 'Mobile required' },
            'whatsapp_number': { required: 'whatsapp number required' },
            'email': { required: 'Invalid e-mail!' }, 
            'company_address': { required: 'Company address required' }, 
            'city': { required: 'City required' },
            'state': { required: 'City required' },
            'zip_code': { required: 'Zip code required' },
            'country': { required: 'Country required' }, 
        },
        submitHandler: function(form){
            // if ($('input#website').val().length == 0) {
            //     form.submit();
            // }
        }
    });
 
    $('#exhibitor-registration').validate({
        errorPlacement: function(error, element) {  
            $('.'+element[0].name+'_error').find('span').text( error[0].innerText);
            // $('#exhibitor-registration .stepy-error').append(error);
        },
        rules: {
             'name': {
                required: true,
                lettersonly: true,
            },// Name
            'organization': {
                required: true, 
            }, // Organization
            'designation': {
                required: true, 
            }, // Designation
            'mobile':  {
                required: true,
                digits: true
            },
            'whatsapp_number':  {
                required: false,
                digits: true
            },
            'email': {
                required: true,
                email: true
            }, // Email
            // 'company_address': 'required', // Company Address
            'city': 'required', // City
            'zip_code': 'required', // Postal / Zip Code
            'state': 'required', // State
            'country': 'required'  // Country
            // 'accept_promotional_updates': 'required', // Future updates and promotions (Checkbox)
        },
        messages: {
            'name': { required: 'Name is required' },
            'organization': { required: 'Organisation is required' },
            'designation': { required: 'Designation is required' },
            'mobile': { required: 'Mobile number is required' },
            'whatsapp_number': { required: 'WhatsApp number is required' },
            'email': {
                required: 'Email is required',
                email: 'Invalid email address!'
            },
            'company_address': { required: 'Company Address is required' },
            'city': { required: 'City is required' },
            'zip_code': { required: 'Postal / Zip Code is required' },
            'state': { required: 'State is required' },
            'country': { required: 'Country is required' }
            // 'accept_promotional_updates': { required: 'Please accept terms for future updates and promotions' },
        },
        submitHandler: function(form){ 
            // if ($('input#website').val().length == 0) {
            //     form.submit();
            // }
        },
         
    });
    
    
     $('#business-matchmaking').validate({       
        errorPlacement: function (error, element) {
            $('.' + element[0].name + '_error').find('span').text(error[0].innerText);
            // $('#business-matchmaking .stepy-error').append(error);
        },
        rules: {
            'name_prefix': 'required',
            'first_name': 'required',
            'last_name': 'required',            
            'email': {
                required: true,
                email: true
            }, // Email
            'mobile': 'required',
            'company_name': 'required',
            'products_of_interest': 'required',
            'department': 'required',
            'designation': 'required',
            'company_address': 'required', // Company Address
            'city': 'required', // City
            'state': 'required', // State
            'country': 'required', // Country
            'zip_code': 'required', // Postal / Zip Code
            'company_website': 'required', 
        },
        messages: {
            'name_prefix': { required: 'Please select' },
            'first_name': { required: 'First name field  is required' },
            'last_name': { required: 'Last name field  is required' },
             'email': {
                required: 'Email is field  required',
                email: 'Invalid email address!'
            }, 
            'mobile': { required: 'Mobile field  is required' },
            'company_name': { required: 'Company name field  is required' },
            'products_of_interest' :{ required: 'Products of interest field is required' },
            'department': { required: 'The department field is required' },
            'designation': { required: 'Designation field  is required' },           
            'company_address': { required: 'Company Address field  is required' },
            'city': { required: 'City field is required' },
            'state': { required: 'State field is required' },
            'country': { required: 'Country field is required' },
            'zip_code': { required: 'Zip Code field  is required' },
            'company_website': { required: 'Company website field is required' }
        },
        submitHandler: function (form) {
            // if ($('input#website').val().length == 0) {
            //     form.submit();
            // }
        },

    });
});
			