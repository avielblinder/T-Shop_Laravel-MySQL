<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../resources/css/dashboard.css')}}?<?php echo time(); ?>" >
    <link rel="stylesheet" href="{{asset('../resources/css/style.css')}}?<?php echo time(); ?>" >
    <script>let BASE_URL="{{url('')}}"</script>
    <title>T-Shop Admin Panel</title>
</head>
<body>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{url('cms/dashboard')}}">T-Shop Admin Panel</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3 flex-row">
    <li class="nav-item text-nowrap">
      <a class="nav-link" target="_blank" href=" {{url('')}} ">Back to site</a>
    </li>
    <li class="nav-item text-nowrap  pl-3">
      <a class="nav-link" href="{{url('user/logout')}}">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/dashboard')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/menu')}}">
              <span data-feather="file"></span>
              Menu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/content')}}">
              <span data-feather="shopping-cart"></span>
              Content
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/categories')}}">
              <span data-feather="users"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/products')}}">
              <span data-feather="bar-chart-2"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cms/orders')}}">
              <span data-feather="layers"></span>
              Orders
            </a>
          </li>
        </ul>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            @if(Session::has('bm'))
              <div class="row bm-box mt-3 ml-3">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {{Session::get('bm')}}
                      </div>
                  </div>
                </div>
              @endif
              @if($errors->any())
              <div class="row  mt-3 ml-3">
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
        @yield('cms_content')
    </main>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{asset('../resources/js/script.js')}}?<?php echo time(); ?>"></script>
     <script>
        //--------Summer-note text-box-------------
        
        $('#article').summernote({
            height: 300,
        });
    </script>
</body>
</html>
