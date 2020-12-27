<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\Product;
use Cart ,Session, Image ,DB;

class Product extends Model
{
    use HasFactory;

    static public function getProducts($cat_url, &$data){
        if($category = Categorie::where('url','=',$cat_url)->first()){
            $category = $category->toArray();

            if($products = Categorie::find($category['id'])->products){
                $data['products'] = $products->toArray();
                $data['title'] .= $category['title'];
                $data['cat_url'] = $cat_url;
            }

        }else{
            abort(404);
        }
    }

    static public function addToCart($id){
        if(! empty($id) && is_numeric($id)){

            if(!Cart::get($id)){

                if($product = self::find($id)){//self = Product the class
                    $product = $product->toArray();
                    Cart::add($id,$product['title'],$product['price'],1,[]);
                    Session::flash('bm',$product['title'] . 'added to cart.');
                }
            }
        }
    }

    static public function updateCart($request){
        if(!empty($request['id']) && is_numeric($request['id']) && !empty($request['op'])){
            $item = Cart::get($request['id']);

            if($item){

                if($request['op'] == '+'){
                    Cart::update($request['id'],['quantity'=> 1]);
                }elseif($request['op'] == '-'){
                    $item = $item->toArray();

                    if($item['quantity'] -1 != 0){
                        Cart::update($request['id'],['quantity'=> -1]);
                    }
                }
            }
        }
    }

    static public function save_new($request){
        $img = self::loadImage($request);
        $image_name = $img ? $img : 'default-image.png';
        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->image = $image_name;
        $product->url = $request['url'];
        $product->price = $request['price'];
        $product->save();
        Session::flash('bm','Product has been saved.');
    }

    static public function update_item($request, $id){
        $image_name = self::loadImage($request);
        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->url = $request['url'];
        $product->price = $request['price'];

        if($image_name){
          $product->image = $image_name;
        }
        $product->save();
        Session::flash('bm','Product has been updated.');
    }

    static private function loadImage($request){
        $image_name = '';

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path('../resources/images/') ,$image_name);
            $img = Image::make(public_path('../resources/images/')  . $image_name);
            $img->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('../resources/images/') . 'R-' . $image_name);
            unlink(public_path('../resources/images/')  . $image_name);
            $image_name =  'R-' . $image_name;
        }
        return $image_name;
    }

    static public function deleteImage($id){
        $product = DB::select("SELECT * FROM products WHERE id=$id");
        $img = $product[0]->image;
        $img_path = public_path('../resources/images/') . $img;

        if($img != 'default-image.png'){
            unlink($img_path);
        }
    }

    static public function fetchData($request){
        if($request->get('search')){
            $query = $request->get('search');

            if($query){
                $data = DB::table('products')
                        ->where('title','LIKE',"%$query%")
                        ->get();

                if($data){
                    return $data;
                }else{
                    return false;
                }
            }
        }
    }

    static public function fetchSearch($request){
        $query = $request->get('search');
        $products = DB::table('products')
        ->where('title','LIKE',"%$query%")
        ->get();
        return $products;
    }

}
