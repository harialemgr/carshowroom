<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyForVacancyRequest extends FormRequest
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
            'address' => 'required',
            'contact' => 'required|regex:/^[0-9]+$/|min:10|max:10',
            'curriculum_vitae' => 'required|file|mimes:pdf,doc,docx'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Enter your name',
            'address.required' => 'Enter your address',
            'contact.required' => 'Enter your phone number',
            'contact.regex' => 'Only numbers are allowed',
            'contact.min' => 'Enter 10 digit phone number',
            'curriculum_vitae.required' => 'Choose a file',
            'curriculum_vitae.mimes' => 'Supported file types are pdf,doc,docx',
        ];
    }
}
