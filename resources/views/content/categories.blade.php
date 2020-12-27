@extends('master')
@section('main-content')
<div class="row m-2">
    <div class="col-md-12">
        <h1>T-Shop Categories.</h1>
    </div>
</div>
<div class="row mt-3">
    @foreach($categories as $category)
    <div class="col-lg-4 col-sm-6  p-2">
        <div class="card p-3">
            <h3>{{$category['title']}}</h3>
            <p><img width="200" height="200" src="{{asset('../resources/images/' . $category['image'])}}" alt=""></p>
            <p>{!!$category['article']!!}</p> {{-- dont clean it from xss atack --}}
            <p >
                <a href="{{url('shop/'. $category['url'])}}" class="btn btn-primary float-right mr-3">View Category</a>
            </p>
        </div>
    </div>
    @endforeach
</div>
@endsection
