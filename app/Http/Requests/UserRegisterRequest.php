<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'first_name' => 'required|min:2|max:100',
            'last_name' => 'required|min:2|max:100',
            'street' => 'max:100',
            'email' => 'required|email',
            'password_confirmation' => 'required|same:password',
            'password' => 'required|min:3'
        ];
    }

    /**
     * Get the validation messages that apply to the rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name must be atlease 2 characters',
            'first_name.max' => 'First name should not contain 100 characters',
            'last_name.required' => 'Last name is required',
            'last_name.min' => 'Last name must be atlease 2 characters',
            'last_name.max' => 'Last name should not contain 100 characters',
            'street.max' => 'Street should not contain more than 100 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email must be unique',
            'password_confirmation.required' => 'Confirm password is required',
            'password_confirmation.same' => 'Confirm password must be same as password',
            'password.required' => 'Password is required',
            'password.min' => 'Password required minimum 3 characters',
        ];
    }
}
