@extends('master')
@section('main-content')
<div class="row">
    <div class="fix-img-bug col-md-12 border p-5">
        <h1 class="mb-4">{{$product['title']}}</h1>
        <p><img class="float-left mr-4" width="300" height="250" src="{{asset('../resources/images/' . $product['image'])}}" alt=""></p>
        <p class="w-100">{!! $product['article'] !!}</p>
        <p><b>Price on site:</b> {{$product['price']}}</p>
        <p class="mb-0">
        @if(!Cart::get($product['id']))
           <input data-id="{{$product['id']}}" class="btn btn-success add-to-cart-btn" type="button" value="+ Add to cart">
        @else
          <input class="btn btn-success add-to-cart-btn" disabled="disables" type="button" value="Added to cart">
        @endif
        <a class="btn btn-primary"href="{{url('shop/checkout')}}">Checkout</a>
        </p>
    </div>
</div>
@endsection
