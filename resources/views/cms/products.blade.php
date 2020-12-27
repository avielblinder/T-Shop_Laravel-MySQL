@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit site products.</h1>
</div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <a class="btn btn-primary" href=" {{url('cms/products/create')}} ">+ Add new product</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead class="bg-secondary">
            <tr>
              <th>Title</th>
              <th>Category</th>
              <th>Product Image</th>
              <th>Price</th>
              <th>Updated_at</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $item)
              <tr>
                <td> {{$item['title']}} </td>
                @foreach($categories as $category)
                  @if($category['id']== $item['categorie_id'])
                    <td> {{$category['title']}} </td>
                  @endif
                @endforeach
                <td> <img width="50" src=" {{asset('../resources/images/' . $item['image'])}} " alt=""> </td>
                <td> {{$item['price']}} $</td>
                <td> {{date('d/m/Y - H:i:s',strtotime($item['updated_at']))}} </td>
                <td class="text-center">
                  <a class="btn-sm btn-primary" href="{{url('cms/products/' . $item['id'] . '/edit')}}">Edit</a>
                  <a class="btn-sm btn-danger" href="{{url('cms/products/' . $item['id'])}}">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
