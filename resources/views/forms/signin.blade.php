@extends('master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <h1>Sign-in Page. </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST">
            {{-- make auto token --}}
            {{csrf_field()}}
            <div class="form-group">
               <label for="email">Email address</label>
               <input name="email" value="{{old('email')}}" type="text" class="form-control" id="email">
              <span class="text-danger">{{$errors->first('email')}}</span>
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input name="password" type="password" class="form-control" id="password">
            </div>
            <input class="btn btn-primary" type="submit" value="Sign-in">
        </form>
    </div>
</div>
@endsection
