<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email'=>'required|email|bail|unique:users',
            'password'=>'required|bail'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Email Is Required',
            'email.email'=>'Enter a valid Email',
            'email.bail'=>'Email Is Required',
            'email.unique'=>'Email has been Taken',
            'password.required'=>'Password Is Required',
            'password.bail'=>'Password Is Required'

        ];
    }
}
