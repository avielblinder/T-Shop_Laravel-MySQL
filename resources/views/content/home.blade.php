@extends('master')
@section('main-content')
<div class="row mb-5">
    <div class="col-md-12">
        <h1 class="display-4">Welcome to T-Shop!</h1>
        <p>The best place to buy online.</p>
    </div>
    <div class="col-md-12">
    <h3 class="display-4 mb-5 mt-5 home-h3">Categories</h3>
    </div>
        @foreach($categories as $category)
            <div class="col-md-6 ">
                <a class="text-decoration-none" href="{{url('shop/' . $category['url'])}}">
                    <div class="image-div">
                        <img width="100%" height="350" src="{{asset('../resources/images/' .$category['image'])}}" alt="">
                        <h3 class="categories-home-header m-0 p-0">{{$category['title']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    <div class="col-md-12">
        <hr>
        <h3 class="display-4 mb-5 mt-5 home-h3">Products</h3>
        <div class="main">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach($products as $product)
                            <li class="glide__slide">
                                <a class="glide_a" href="{{url('shop/products/' . $product['url'])}}">
                                    <img src="{{asset('../resources/images/' . $product['image'])}}" alt="">
                                    <h4 class="fst-italic">{{$product['title']}}</h4>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-angle-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <a class="btn-primary btn float-right" href="{{url('shop/all-products')}}">Explorer Our Products</a>
    </div>
</div>
@endsection

@section('specielScripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js" integrity="sha512-BXASbMmKLu+RC5TDnkupyhvrjiOQXILh/5zgIS8k5JAC71a73lNweVEg/X+9XJQ7GK22PH9WpztY3zqrji+xrQ==" crossorigin="anonymous"></script>
<script>
//---------Operate the Glide carousel------------

let ul = document.querySelector('.glide__slides');

ul.addEventListener('mouseenter',() => glide.update({autoplay: false }));
ul.addEventListener('mouseleave',() => glide.update({autoplay: true }));

    let glide = new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    focusAt:'center',
    animationDuration: 1100,
    animationTimingFunc: 'ease-in-out',
    hoverpause: true,
    autoplay: true,
    breakpoints:{
    2000:{perView: 5},
    600: { perView: 1 },
    1200: { perView: 3 }
    },
}).mount();
// Breakpoints.match()
</script>

@endsection
