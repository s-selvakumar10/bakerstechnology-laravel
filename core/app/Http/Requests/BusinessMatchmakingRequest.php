<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessMatchmakingRequest extends FormRequest
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
        "name_prefix" => 'required',
        "first_name" => 'required',
        "last_name" => 'required',
        "email" => 'required',
        "mobile" => 'required',
        "company_name" => 'required',
        "products_of_interest" => 'required',
        // "description" => 'required',
        // "date" => 'required',
        "department" => 'required',
        "designation" => 'required',
        "company_address" => 'required',
        "city" => 'required',
        "state" => 'required',
        "country" => 'required',
        "zip_code" => 'required',
        "company_website" => 'required',
      ];
    }

    public function messages()
    {
        return [
            'name_prefix' => 'This field is required'
        ];
    }
}
