<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ProductRequest;
use  App\Models\categorie;
use  App\Models\Product;
use Session;

class ProductController extends MainController
{
    public function index()
    {
        self::$data['products'] = Product::all()->toArray();
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.products', self::$data);
    }

    public function create()
    {
        self::$data['categories'] = categorie::all()->toArray();
        return view('cms.add_product', self::$data);
    }

    public function store(ProductRequest $request)
    {
        Product::save_new($request);
        return redirect('cms/products');
    }

    public function show($id)
    {
        self::$data['id'] = $id;
        return view('cms.delete_product', self::$data);
    }


    public function edit($id)
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['product'] = Product::find($id)->toArray();
        return view('cms.edit_product', self::$data);
    }

    public function update(ProductRequest $request, $id)
    {
        Product::update_item($request, $id);
        return redirect('cms/products');
    }

    public function destroy($id)
    {
        Product::deleteImage($id);
        Product::destroy($id);
        Session::flash('bm', 'Product has been deleted.');
        return redirect('cms/products');
    }
}
