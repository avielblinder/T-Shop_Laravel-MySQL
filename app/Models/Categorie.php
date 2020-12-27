<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session,Image,DB ;

class Categorie extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    static public function save_new($request){
        $img = self::loadImage($request);
        $image_name = $img ? $img : 'default-image.png';
        $category = new self();
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->url = $request['url'];
        $category->image = $image_name;
        $category->save();
        Session::flash('bm','Category has been saved.');
    }

    static public function update_item($request, $id){
        $image_name = self::loadImage($request);
        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->url = $request['url'];

        if($image_name){
            $category->image = $image_name;
        }
        $category->save();
        Session::flash('bm','Category has been updated.');
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
        $category = DB::select("SELECT * FROM categories WHERE id=$id");
        $img = $category[0]->image;
        $img_path = public_path('../resources/images/') . $img;

        if($img != 'default-image.png'){
            unlink($img_path);
        }
    }
}
