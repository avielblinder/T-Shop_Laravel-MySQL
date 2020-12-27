<?php
$title = 'T-Shop | Page 404';
$menu = App\Models\Menu::all()->toArray();
?>
@extends('master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning text-center" role="alert">
            <h3>The page you are looking for is not found!</h3>
            <p>Error 404</p>
        </div>
    </div>
</div>
@endsection
