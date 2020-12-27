@extends('master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <h1>{{str_replace('T-Shop | ','',$title)}}</h1>
    </div>
</div>
@if(!empty($products))
<div class="row">
@foreach($products as $product)
    <div class="col-lg-4 p-3">
        <div class="card produt-card p-2">
            <img class="card-img-top products-img" height="350" width="200" src="{{asset('../resources/images/' . $product['image'])}}" alt="">
            <h5 class="card-title">{{$product['title']}}</h5>
            <p class="card-text">{!! Str::words($product['article'], 20, ' ...') !!}... <a href="{{url('shop/products/'.$product['url'])}}" class="pl-2">Read More</a></p>
            <p  class="my-auto"><b>Price on site: </b> {{$product['price']}}$ </p>
            <p class="my-auto m-0">
            @if(!Cart::get($product['id']))
            <input data-id="{{$product['id']}}" class="btn btn-success add-to-cart-btn" type="button" value="+ Add to cart">
            @else
            <input class="btn btn-success add-to-cart-btn" disabled="disables" type="button" value="Added to cart">
            @endif
            <a class="btn btn-primary"href="{{url('shop/' . $cat_url . '/' . $product['url'])}}">More details</a>
            </p>
        </div>
    </div>
@endforeach
</div>
@endif
@endsection
