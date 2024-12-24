<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitorRequest extends FormRequest
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
      
        return [
           'name' => 'required',
           'organization' => 'required',
           'designation' => 'required',
           'mobile' => 'required',
        //    'whatsapp_number' => 'required',
           'email' => 'required', 
        //    'company_address' => 'required', 
           'city' => 'required', 
        //   'state' => 'required', 
        //   'zip_code' => 'required', 
        //   'country' => 'required',  
        //    'accept_promotional_updates' => 'required',
        ];
    }

    function messages() {
        return [
            'accept_promotional_updates' => 'Please accept terms for future updates and promotions'
        ];
    }
    
     public function attributes(): array
    {
        return [
            'organization' => 'organisation', 
        ];
    }
}
