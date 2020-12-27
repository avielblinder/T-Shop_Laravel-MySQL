<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request as Req;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Req $request)
    {
        $unique = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'categorie_id' => 'required',
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:products,url' . $unique,
            'article' => 'required',
            'price' => 'required|numeric',
            'image' => 'image',
        ];
    }
}
