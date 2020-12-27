@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit this product.</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <form action="{{url('cms/products/' . $product['id'] )}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="item_id" value="{{$product['id']}}">
            <div class="form-group">
                <label for="categorie_id">Category:</label>
                  <select name="categorie_id" id="categorie_id" class="form-control">
                      @foreach($categories as $category)
                        <option @if($product['categorie_id']==$category['id']) selected @endif value="{{$category['id']}}"> {{$category['title']}} </option>
                      @endforeach
                  </select>
             </div>
             <div class="form-group">
                <label for="title">Title:</label>
                <input name="title" type="text" class="form-control origin-text" id="title" value="{{$product['title']}}">
             </div>
             <div class="form-group">
                <label for="url">URL:</label>
                <input name="url" type="text" class="form-control target-text" id="url" value="{{$product['url']}}">
             </div>
             <div class="form-group">
                 <label for="article">Article:</label>
                 <textarea name="article" class="form-control" id="article"> {!!$product['article']!!}</textarea>
              </div>
             <div class="form-group">
                 <label for="price">Price:</label>
                 <input name="price" type="text" class="form-control" id="price" value="{{$product['price']}}">
              </div>
              <div class="form-group">
                <img class="m-2 d-block" width="70" src="{{asset('../resources/images/'.$product['image'])}}" alt="">
                  <label for="image"><b>Change product Image:</b></label>
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input name="image" type="file" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
             <a class="btn btn-secondary" href=" {{url('cms/products')}} ">Cancel</a>
             <input class="btn btn-primary" type="submit" value="Save product">
         </form>
    </div>
</div>
@endsection
