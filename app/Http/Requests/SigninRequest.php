<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ];
    }

    public function messages(){
        return [
            'email.required' => '.אנא הזן אימייל תקין', //hebrew messages
            'password.required' => '.אנא הזן סיסמא תקינה'
        ];
    }
}
