 $(document).ready(function(){


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


 
$(document).find( '.form').on('submit',   function (e) {
  
    e.preventDefault();
    
    $.blockUI({
        message: '<h5> Please wait...</h5>'
    });
 
    var _this = $(this);
    var formData = new FormData(this);
    var url = $(this).attr('action');   
   
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
    }).done(function (res) {
       $.unblockUI();
        $(_this).find('.error').find('span').text('');
        $(_this).find('.captcha-error').text('')
        if (res.status) {
            window.location.href = res.redirect_url;
        } else {
            if(res.captcha_error || false){ 
                $(_this).find('.captcha-error').text(res.captcha_error)
            }else{
                Swal.fire({
                    icon: "error",
                    title:  res.msg || "Something went wrong!",
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonColor: "#bf9444",
                    cancelButtonText: "Close"
                });
                
            }
           
        }

    }).fail(function (xhr) {
         $.unblockUI();
 
        if (xhr.responseJSON && xhr.responseJSON.errors) {
            $(_this).find('.error').find('span').text('');
 

            $.each(xhr.responseJSON.errors, function (name, msg) {
                var name = name.replace(/\./g, '_');
                $(_this).find('.' + name + '_error').find('span').text(msg);               

            }); 

        } 
        else if (xhr.responseJSON && xhr.responseJSON.message) {
            console.error(xhr.responseJSON.message); 
        }
        else{ 
            Swal.fire({
                icon: "error",
                title:  "Something went wrong!",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonColor: "#bf9444",
                cancelButtonText: "Close"
            });
        }
    });
});


function slugify(text) {
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(/[^\w\-]+/g, '') // Remove all non-word chars
        .replace(/\-\-+/g, '-') // Replace multiple - with single -
        .replace(/^-+/, '') // Trim - from start of text
        .replace(/-+$/, ''); // Trim - from end of text
}



// $(document).ready(function () {
//     if (typeof flashSuccess !== 'undefined' && flashSuccess != '') {
//         Swal.fire({
//             icon: "success",
//             title: flashSuccess,
//         });
//     }
// });

$(document).find( '.country').on('change',   function (e) {
  
    e.preventDefault();
    const selectedCountry = $(this).val();
    const $stateSelect = $('.state');

    // Clear the state dropdown
    $stateSelect.empty().append('<option value="">Select a state</option>').prop('disabled', true);

    if (selectedCountry) {
        $.ajax({
            url: `state/${selectedCountry}`,
            method: 'GET',
            success: function(data) {
                if (data) {
                    $.each(data, function(index, state) {
                        $stateSelect.append($('<option></option>').val(state).text(state));
                    });
                    $stateSelect.prop('disabled', false);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching states:', textStatus, errorThrown);
            }
        });
    }
});

});