@extends('master')
@section('main-content')
@foreach($contents as $content)
<div class="row">
    <div class="col-md-12">
        <h3 class="mt-3 mb-5 display-4"> {{$content->title}} </h3>
        <p class="content-p"> {!!$content->article!!} </p>
    </div>
</div>
@endforeach
@endsection
