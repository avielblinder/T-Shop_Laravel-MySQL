<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request as Req;

class ContentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Req $request)
    {
        $unique = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'menu_id' => 'required',
            'title' => 'required',
            'article' => 'required',
        ];
    }
}
