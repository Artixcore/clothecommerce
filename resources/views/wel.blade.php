<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content="Admin Panel with Laravel" name="description">
    <meta content="admin panel" name="keywords">
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style_css')
    <!-- Styles -->
      <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
          <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/">{{ config('app.name', 'Laravel') }}</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}


          @guest
    <li>
        <a href="{{ route('login') }}">{{ __('Admin') }}</a>
    </li>
    {{-- @if (Route::has('register'))
        <li>
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif --}}
@else
<li class="dropdown"><a href="#"><span>Manu</span> <i class="bi bi-chevron-down"></i></a>
    <ul>

            @can('manage-users')
            @if (Auth::user()->urole == 'admin')
            <a href="{{ route('admin.users.index') }}">
                <i class="fas fa-user-shield"></i>  Admin
            </a>
            @elseif (Auth::user()->urole == 'superadmin')
            <a href="{{ route('superadmin.users.index') }}">
                <i class="fas fa-user-shield"></i> Super Admin
            </a>
            @else
            LOL
            @endif
            @endcan
            <a href="{{ ('profile') }}/{{Auth::user()->name}}"><i class="far fa-id-card"></i> Profile </a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
               <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </li>
</ul>
</li>
@endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Grow your business with Us</h1>
              <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented Designers and Developers</h2>
              <div data-aos="fade-up" data-aos-delay="800">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
              <img src="{{ asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->

      <main id="main">

    <div id="app">
        <example-component />
      </div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
{{-- @guest
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
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @can('manage-users')
        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
            User Managment
            </a>
        @endcan

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endguest --}}
