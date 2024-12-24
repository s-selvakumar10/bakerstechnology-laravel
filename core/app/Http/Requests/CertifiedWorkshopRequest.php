<?php

namespace App\Http\Requests;

use App\Helpers\Helper;
use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class CertifiedWorkshopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
    
        $captcha_value =  $this->captcha_value ?? '';
        $captcha_set_value = Helper::captchaGet('certified_workshop');
        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'company_name' => 'required',
            // 'address' => 'required',
            'city' => 'required', 
            'state' => 'required', 
            'country' => 'required',  
            // 'zip_code' => 'required', 
            'mobile' => 'required',
            'whatsapp_number' => 'required',
            'email' => 'required', 
            // 'website' => 'required', 
            'industry' => 'required', 
            'days' => 'required', 
            'utr_number' => 'required', 
            'captcha_value' => ['required',function($attr,$val,$fail) use($captcha_value, $captcha_set_value){
                if( $captcha_set_value != $captcha_value){
                    $fail('Invalid captcha');
                } 
            }],
            // 'attachment' => 'required',
         ];
        //   $rules['registration_left'] =  [ function($attr,$val,$fail){
        //       if($val <= 0){
        //           $fail($val);
        //       }
        //   }];
         return $rules;
    }
    
    
    
    
    
    public function messages()
    {
        return [
            'captcha_value.required' => 'Invalid captcha'
        ];
    }
    
    
    
     protected function prepareForValidation(): void
    { 
        $this->merge([
            'registration_left' => Helper::workshopRegistrationLeft()
            ]);
    }
   
}
