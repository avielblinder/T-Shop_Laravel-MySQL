<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request as Req;

class EditUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Req $request)
    {
        $unique = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email' . $unique,
            'password' => 'confirmed',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:6000',
        ];
    }

    public function messages(){
        return [
            'email.required' => '.אנא הזן אימייל תקין', //hebrew messages
            'password.required' => '.אנא הזן סיסמא תקינה'
        ];
    }
}
