@extends('master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <h1>T-Shop Checkout page.</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if($cart)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Sub total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                      <td>{{$item['name']}}</td>
                      <td class="text-center">
                          <input data-id="{{$item['id']}}" class="update-cart" type="button" value="-">
                          <input class="text-center" type="text" size="1" value="{{$item['quantity']}}">
                          <input data-id="{{$item['id']}}" class="update-cart" type="button" value="+">
                      </td>
                      <td>{{$item['price']}}</td>
                      <td>{{$item['quantity'] * $item['price']}}</td>
                      <td class="text-center"><a class="text-danger"href="{{url('shop/remove-item/'  . $item['id'])}}">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                          </svg>
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <p>
          <b>Total in cart: </b> {{Cart::getTotal()}} $
          <span class="float-right"><a class="btn btn-sm btn-secondary" href="{{url('shop/clear-cart')}}">Clear cart</a></span>
        </p>
        <p><a class="btn btn-primary" href="{{url('shop/order')}}">ORDER NOW</a></p>
        @else
         <p><i>Empty cart... <a href="{{ url('/shop') }}">go to shop</a> </i></p>
        @endif
    </div>
</div>
@endsection
