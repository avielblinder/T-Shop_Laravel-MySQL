@extends('master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <h1>Sign-up Page. </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" enctype="multipart/form-data">
            {{-- make auto token --}}
            {{csrf_field()}}
            <div class="form-group">
               <label for="name">Name</label>
               <input name="name" value="{{old('name')}}" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
               <label for="email">Email address</label>
               <input name="email" value="{{old('email')}}" type="text" class="form-control" id="email">
              <span class="text-danger">{{$errors->first('email')}}</span>
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
               <label for="password_confirmation">Confirm password</label>
               <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input name="profile_image" type="file" class="custom-file-input" id="profile_image">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                  </div>
              </div>
            <input class="btn btn-primary" type="submit" value="Sign-up">
        </form>
    </div>
</div>
@endsection
