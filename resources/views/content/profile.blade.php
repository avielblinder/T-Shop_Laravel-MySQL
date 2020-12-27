<?php
$index = 0;
?>
@extends('master')
@section('main-content')
<div class="row mb-5">
    <div class="col-md-12 mt-3">
        <h1 class="mb-5 display-4">Profile Details.</h1>
    </div>
    <div class="col-md-10 mb-5">
        <img class="user-image float-right rounded" width="300" height="300" class="float-right" src="{{asset('../resources/images/' .$user[0]->profile_image)}}" alt="">
        <h3 class="user-name mb-5">{{$user[0]->name}}</h3>
        <p><b> Email : </b>{{$user[0]->email}}</p>
        <p><b> Created-at : </b>{{$user[0]->created_at}}</p>
        <a class="btn btn-primary edit-user-btn" href="{{url('user/profile/' . $user[0]->id . '/edit')}}">Edit <i class="pl-1 fas fa-pencil-alt"></i></a>
    </div>
    <div class="col-md-12 mt-5" id="orders">
        @if($orders)
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center"># </th>
                        <th>Date </th>
                        <th>Order Info</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <th class="text-center">{{++$index}}</th>
                            <td>{{date('d F , Y ',strtotime($order->created_at))}}</td>
                            <td>
                                <ul>
                                    @foreach(unserialize($order->data) as $item)
                                    <li class="ml-5">{{$item['name']}}, Quantity: {{$item['quantity']}} </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{$order->total}}$</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

