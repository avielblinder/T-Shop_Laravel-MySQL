<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request as Req;

class MenuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Req $request)
    {
        $unique = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'link' => 'required',
            'mtitle' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:menus,url' . $unique,
        ];
    }
}
