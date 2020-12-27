@extends('cms.cms-master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="row">
        <div class="col-md-12">
            <h1>Are you sure you want to delete this item?</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <form action="{{url('cms/menu/' . $id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <!-- <input type="hidden" name="_method" value="DELETE"> -- HTML delete function -->
            <a class="btn btn-secondary"href=" {{url('cms/menu')}} ">Cancel</a>
            <input class="btn btn-danger" type="submit" value="Delete">
        </form>
    </div>
</div>
@endsection
