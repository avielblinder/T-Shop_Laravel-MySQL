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
        <form action="{{url('cms/menu')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
               <label for="link">Link:</label>
               <input name="link" value="{{old('link')}}" type="text" class="form-control origin-text" id="link">
            </div>
            <div class="form-group">
               <label for="title">Title:</label>
               <input name="mtitle" type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
               <label for="url">URL:</label>
               <input name="url" type="text" class="form-control target-text" id="url">
            </div>
            <a class="btn btn-secondary"href=" {{url('cms/menu')}} ">Cancel</a>
            <input class="btn btn-primary" type="submit" value="Save menu">
        </form>
    </div>
</div>
@endsection
