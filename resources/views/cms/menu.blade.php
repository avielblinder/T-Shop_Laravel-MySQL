@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit site menu</h1>
</div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <a class="btn btn-primary" href=" {{url('cms/menu/create')}} ">+ Add new menu link</a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead class="bg-secondary">
            <tr>
              <th>Link</th>
              <th>Updated_at</th>
              <th>Operation</th>
            </tr>
          </thead>
          <tbody>
            @foreach($menu as $item)
              <tr>
                <td> {{$item['link']}} </td>
                <td> {{date('d/m/Y - H:i:s',strtotime($item['updated_at']))}} </td>
                <!-- <td> {{$item['updated_at']}} </td> -->
                <td class="text-center"> 
                  <a class="btn-sm btn-primary" href="{{url('cms/menu/' . $item['id'] . '/edit')}}">Edit</a>
                  <a class="btn-sm btn-danger" href="{{url('cms/menu/' . $item['id'])}}">Delete</a>
                </td>
              </tr>  
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection