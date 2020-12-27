@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">T-Shop site orders</h1>
</div>
    <div class="row">
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead class="bg-secondary">
            <tr>
              <th>User</th>
              <th>Order Details</th>
              <th>Total</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
              <tr>
                <td> {{$order->name}} </td>
                <td>
                  <ul>
                    @foreach(unserialize($order->data) as $item)
                      <li class="ml-5"> {{$item['name']}}, Price: {{$item['price']}}$, Quantity: {{$item['quantity']}} </li>
                    @endforeach
                  </ul>
                </td>
                <td> {{$order->total}} $</td>
                <td> {{$order->created_at}} </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
