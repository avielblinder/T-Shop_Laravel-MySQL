<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\Categorie;
use \App\models\Product;
use \App\models\Order;
use Cart, Session;

class ShopController extends MainController
{
    public function categories(){
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] .= 'Shop Categories';
        return view('content.categories', self::$data);
    }

    public function products($cat_url){//when you put {} variable in url-get, you can get it in here with parameter
     // echo $cat_url;
     Product::getProducts($cat_url,self::$data);
     return view('content.products',self::$data);
    }

    public function item($cat_url,$prd_url){
        if($product = Product::where('url','=',$prd_url)->first()){
            $product = $product->toArray();
            self::$data['title'] .= $product['title'];
            self::$data['product'] = $product;
            return view('content.item',self::$data);
        }else{
            abort(404);
        }
    }

    public function addToCart(Request $request){//like $_GET just with laravel
        Product::addToCart($request['id']);
    }

    public function checkout(){
        self::$data['title'] .= 'Checkout';
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('content.checkout',self::$data);
    }

    public function clearCart(){
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function updateCart(Request $request){//get it from ajax data
        Product::updateCart($request);
    }

    public function removeItem($id){
        Cart::remove($id);
        return redirect('shop/checkout');
    }

    public function order(){
        if(Cart::isEmpty()){
            return redirect('shop');
        }else{

            if(!Session::has('user_id')){
                return redirect('user/signin?rt=shop/checkout');//remember the rt as variable
            }else{
                Order::save_new();
                return redirect('shop');
            }
        }
    }

    public function showProducts(){
        self::$data['products'] = Product::all()->toArray();
        return view('content.allProducts' ,self::$data);
    }

    public function fetch(Request $request){
        $data = Product::fetchData($request);
        echo $data;
    }

    public function search(Request $request){
        $products = Product::fetchSearch($request);
        self::$data['products'] = $products;
        return view('content.searchAllProducts' , self::$data);
    }

}
