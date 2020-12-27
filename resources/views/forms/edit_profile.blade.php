@extends('master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <h1>Sign-up Page. </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{url('user/profile/'. $user[0]->id )}}" method="POST" enctype="multipart/form-data">
            {{-- make auto token --}}
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="item_id" value="{{$user[0]->id}}">
            <div class="form-group">
               <label for="name">Name</label>
               <input name="name" value="{{$user[0]->name}}" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
               <label for="email">Email address</label>
               <input name="email" value="{{$user[0]->email}}" type="text" class="form-control" id="email">
              <span class="text-danger">{{$errors->first('email')}}</span>
            </div>
            <div class="form-group">
               <label for="password">Change password</label>
               <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
               <label for="password_confirmation">Confirm new password</label>
               <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
            </div>
            <img width="70" src="{{asset('../resources/images/' . $user[0]->profile_image)}}" alt="">
            <div class="form-group">
                <label for="profile_image">Change profile image</label>
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input name="profile_image" type="file" class="custom-file-input" id="profile_image">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                  </div>
              </div>
            <input class="btn btn-primary" type="submit" value="Edit Profile">
            <a class="btn btn-secondary" href="{{url('user/profile')}}">Cancel</a>
        </form>
    </div>
</div>
@endsection
