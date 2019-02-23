<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'email' => 'required|email',
            'contact' => 'required|regex:/^[-+,0-9]+$/',
            'branch_type'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Enter a branch name',
            'name.regex' => 'Only alphabets and whitespaces are allowed',
            'address.required' => 'Enter a address',
            'email.required' => 'Email is requied',
            'contact.required' => 'Contact number is required',
            'contact.regex' => 'Invalid input ! Allowed characters 0-9, comman(,), hypen(-), plus(+)',
            'branch_type.required'=>'Choose one option'
        ];
    }
}
