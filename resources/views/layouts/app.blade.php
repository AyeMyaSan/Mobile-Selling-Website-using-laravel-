<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
  {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- CSRF Token --> --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    E-Market
    {{-- {{ config('app.name', 'Laravel') }} --}}
  </title>

  <!-- Scripts -->
  {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/Qty.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}
  <link href="{{asset('css/testing.css')}}" rel="stylesheet">

</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('showSmartPhone')}}">Smart Phone</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('showTablet')}}">Tablet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('showLaptop')}}">Laptop/PC</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('showNewsList')}}">News</a>
              </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('showProductCart')}}"><i class="fa fa-shopping-cart fa-fw"></i>Cart</a>
              {{-- <a class="nav-link"><i class="fa fa-shopping-cart fa-fw"></i>Cart</a> --}}
            </li>
            
            <li class="nav-item">
              @php
              $count = null;
                 if(session('pwishlist')){
                   $count = 0;
                   foreach(session('pwishlist') as $item)
                    {
                      $count += $item['quantity'];
                    }
  
                 } 
              @endphp
              <a class="nav-link" href="{{route('prodwishlist')}}"><i class="fa fa-shopping-cart fa-fw"></i>WishList <span class="badge badge-danger badge-counter">{{$count}}</span></a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('home')}}">Dashboard</i></a>
                <a class="dropdown-item" href="#">Profile</i></a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>

 
@section('footer')
<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">
  <div style="background-color: #efefef;">
    <div class="container">
      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">
          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fa fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fa fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa fa-google-plus white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fa fa-linkedin white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram white-text"> </i>
          </a>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">About Us</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Smart Phone</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Tablet</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Laptop/PC</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Your Account</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Shipping Rates</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Yangon, Myanmar
          </p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@example.com
          </p>
          <p>
            <i class="fa fa-phone mr-3"></i> +95 9258456860
          </p>
          <p>
            <a class="dark-grey-text" href="{{route('contactUs')}}">Contact Us</a>
          </p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
    </div>
    <!-- Copyright -->
  </div>
</footer>
<!-- Footer -->
</div>

  </div>
</body>

</html>
