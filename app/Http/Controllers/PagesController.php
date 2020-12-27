<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
use DB;

class PagesController extends MainController
{
    public function home(){
        self::$data['title'] .= 'Home Page';
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['products'] = Product::all()->toArray();
        return view('content.home' ,self::$data);//you can do . OR /
    }

    public function content($url){
        $contents =  DB::table('contents')
                    ->join('menus','menus.id','=','contents.menu_id')
                    ->where('menus.url','=',$url)
                    ->get()
                    ->toArray();

        if(!$contents) abort(404);
        self::$data['title'] .= $contents[0]->mtitle;
        self::$data['contents'] = $contents;
        return view('content.content', self::$data);
    }

    public function returns(){
        self::$data['title'] .= 'Returns Policy';
        return view('content.returns', self::$data);
    }

}
