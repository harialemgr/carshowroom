<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PricingRequest extends FormRequest
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
            'speed' => 'required|regex:/^[0-9]+$/',
            'unit' => 'required',
            'price' => 'required|regex:/^[0-9]+$/',
            'plan_type' => 'required',
            'traffic' => 'required|regex:/^[a-zA-Z0-9 ]+$/',
            'display' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'speed.required' => 'Enter a speed',
            'speed.regex' => 'Enter a number',
            'unit.required' => 'Choose one option',
            'price.required' => 'Enter a price',
            'price.regex' => 'Enter a number',
            'plan_type.required' => 'Choose one option',
            'traffic.required' => 'Enter a traffic type',
            'traffic.regex' => 'Invalid Input !',
            'display.required' => 'Choose one option',
        ];
    }
}
