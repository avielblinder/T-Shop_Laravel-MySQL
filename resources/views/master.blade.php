<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="referrer" content="origin-when-cross-origin"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css" integrity="sha512-wCwx+DYp8LDIaTem/rpXubV/C1WiNRsEVqoztV0NZm8tiTvsUeSlA/Uz02VTGSiqfzAHD4RnqVoevMcRZgYEcQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" integrity="sha512-wYsVD8ho6rJOAo1Xf92gguhOGQ+aWgxuyKydjyEax4bnuEmHUt6VGwgpUqN8VlB4w50d0nt+ZL+3pgaFMAmdNQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('../resources/css/style.css')}}?<?php echo time(); ?>" >
    <script>let BASE_URL="{{url('')}}"</script>
    <title>{{$title}}</title>
</head>
<body>
    <header class=" sticky-top">
        <div class="container-fluid bg-white border-bottom">
            <nav class="navbar navbar-expand-lg navbar-light container ">
                <a class="navbar-brand" href="{{url('')}}">T-Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @foreach($menu as $item)
                            <li class="nav-item">
                            <a class="nav-link" href="{{url($item['url'])}}"> {{$item['link']}}</a> </a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shop')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('shop/checkout')}}">
                            <svg width="1.2em" height="1.2em"viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                        @if(! Cart::isEmpty())
                            <div class="total-cart">{{Cart::getTotalQuantity()}}</div>
                        @endif
                        </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav floar-right">
                        @if(Session::has('user_id'))
                            @if(Session::has('user_pi'))
                                <li class="nav-item">

                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="25" height="25" class="rounded-circle mb-1 mr-2 border" src="{{url('../resources/images/' . Session::get('user_pi'))}}" alt="profile image">
                                    {{Session::get('user_name')}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link ml-3" href="{{url('user/profile')}}">Profile</a>
                                    <a class="nav-link ml-3" href="{{url('user/logout')}}">Logout</a>
                                </div>
                            </li>
                            @if(Session::has('is_admin'))
                                <li class="nav-item"><a class="nav-link" href="{{url('cms/dashboard')}}">CMS DASHBOARD</a></li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/signin')}}">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/signup')}}">Sign up</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div style="min-height:700px" class="container p-4">
            @if(Session::has('bm'))
             <div class="row bm-box">
               <div class="col-md-12">
                  <div class="alert alert-success">
                      {{Session::get('bm')}}
                    </div>
                 </div>
               </div>
            @endif
            @if($errors->any())
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
          @yield('main-content')
        </div>
    </main>
    <footer class="bg-white shadow-lg">
        <div class="container ">
            <div class="row">
                <div class="footer-div col-md-12 d-flex justify-content-around mt-5">
                    <ul class="footer-nav">
                        <h5>SUPPOET</h5>
                        <li><a href="{{url('contact-us')}}"> Contact-us</a></li>
                        <li><a href="{{url('policy#shipping')}}"> Shipping</a></li>
                        <li><a href="{{url('policy')}}">Returns & Exchange</a></li>
                    </ul>
                    <ul class="footer-nav">
                        <h5>ABOUT US</h5>
                        <li><a href="{{url('about-us')}}">Our story</a></li>
                        <li><a href="{{url('policy#phone')}}">Phone Purchas</a></li>
                        <li><a href="{{url('policy#policies')}}">Policy</a></li>
                    </ul>
                    <ul class="footer-nav">
                        <h5>SHOP</h5>
                        <li><a href="{{url('shop/checkout')}}">Cart</a></li>
                        <li><a href="{{url('shop')}}">Go shop</a></li>
                        <li><a href="{{url('user/profile#orders')}}">Orders</a></li>
                    </ul>
                </div>
            </div>
        <p class="footer-p text-center mb-0 mt-5">all rights reserved aviel blinder &copy; {{date('Y')}}</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{asset('../resources/js/script.js')}}?<?php echo time(); ?>"></script>
    @yield('specielScripts')
</body>
</html>
