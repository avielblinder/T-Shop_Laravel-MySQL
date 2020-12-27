@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row">
        <div class="col-md-12">
            <h1>Add new menu link. </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <form action="{{url('cms/categories')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
               <label for="title">Title:</label>
               <input name="title" type="text" class="form-control origin-text" id="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
               <label for="url">URL:</label>
               <input name="url" type="text" class="form-control target-text" id="url" value="{{old('url')}}">
            </div>
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea name="article" class="form-control" id="article"> {{old('article')}} </textarea>
             </div>
            <div class="form-group">
              <label for="image">Category Image:</label>
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input name="image" type="file" class="custom-file-input" id="image">
                  <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
            </div>
            <a class="btn btn-secondary" href=" {{url('cms/categories')}} ">Cancel</a>
            <input class="btn btn-primary" type="submit" value="Save category">
        </form>
    </div>
</div>
@endsection
