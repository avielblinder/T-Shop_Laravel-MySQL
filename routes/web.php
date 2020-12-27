<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EditUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//-----------shop----------------

Route::prefix('shop')->group(function(){
    Route::get('/',[shopController::class, 'categories']);
    Route::get('add-to-cart',[shopController::class, 'addToCart']);
    Route::get('update-cart',[shopController::class, 'updateCart']);
    Route::get('checkout',[shopController::class, 'checkout']);
    Route::get('clear-cart',[shopController::class, 'clearCart']);
    Route::get('order',[shopController::class, 'order']);
    Route::get('all-products',[shopController::class, 'showProducts']);
    Route::post('all-products/fetch',[shopController::class, 'fetch']);
    Route::get('search',[shopController::class, 'search'])->name('search');
    Route::get('remove-item/{id}',[shopController::class, 'removeItem']);
    Route::get('{category_url}',[shopController::class, 'products']);
    Route::get('{category_url}/{product_url}',[shopController::class, 'item']);
});

//-----------user----------------

Route::prefix('user')->group(function(){
    Route::get('signin',[UserController::class, 'getSignin']);
    Route::post('signin',[UserController::class, 'postSignin']);
    Route::get('signup',[UserController::class, 'getSignup']);
    Route::post('signup',[UserController::class, 'postSignup']);
    Route::get('logout',[UserController::class, 'logout']);
    Route::middleware(['notsign'])->group(function(){
        Route::resource('profile',EditUserController::class);
    });
});

//-----------cms----------------
Route::middleware(['cmsadmin'])->group(function(){
    Route::prefix('cms')->group(function(){
        Route::get('dashboard',[CmsController::class, 'dashboard']);
        Route::get('orders',[CmsController::class, 'orders']);
        Route::resource('menu',MenuController::class);
        Route::resource('content',ContentController::class);
        Route::resource('categories',CategorieController::class);
        Route::resource('products',ProductController::class);
    });
});


 //-----------pages----------------

Route::get('/',[PagesController::class, 'home']);
Route::get('policy',[PagesController::class, 'returns']);
Route::get('{url}',[PagesController::class, 'content']);
