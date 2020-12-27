@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row">
        <div class="col-md-12">
            <h1>Add new content link. </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <form action="{{url('cms/content')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="menu-link">Menu-link:</label>
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Choose menu link...</option>
                  @foreach($menu as $item)
                    <option @if(old('menu_id') == $item['id']) selected @endif value="{{$item['id']}}"> {{$item['link']}} </option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
               <label for="title">Title:</label>
               <input name="title" type="text" class="form-control" id="title" value="{{old('article')}}">
            </div>
            <div class="form-group">
               <label for="article">Article:</label>
               <textarea name="article" class="form-control target-text" id="article"> {{old('article')}} </textarea>
            </div>
            <a class="btn btn-secondary"href=" {{url('cms/content')}} ">Cancel</a>
            <input class="btn btn-primary" type="submit" value="Save content">
        </form>
    </div>
</div>
@endsection
