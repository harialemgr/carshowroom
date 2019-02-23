<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerQueryRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z ]+$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]+$/|max:10',
            'message' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Your name is required !',
            'name.regex' => 'Only Characters and Alphabets are allowed !',
            'email.required' => 'Email address is required !',
            'email.email' => 'Enter a valid email address !',
            'phone.required' => 'Contact number is required !',
            'phone.regex' => 'Only number are allowed!',
            'phone.max' => 'Enter 10 digit phone number',
            'message.required' => 'Message is required !',
        ];
    }
}
