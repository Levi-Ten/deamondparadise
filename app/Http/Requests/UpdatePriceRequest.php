<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service' => 'required',
            'price' => 'required',
            // 'discount' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
          'discount.digits_between' => 'Discount must be between 0 and 99' 
        ];
    }
}
