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

    @yield('meta')


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/main/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/main/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/main/assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/main/assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/main/assets/css/lightbox.css')}}">

    @yield('style_css')

    </head>

    <body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}/#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/')}}#">Brand</a></li>
                            <li class="scroll-to-section"><a href="{{url('/')}}#">B2B</a></li>
                            <li class="scroll-to-section"><a href="{{url('/')}}#">Local</a></li>
                            <li class="scroll-to-section"><a href="{{url('/')}}#explore">Explore</a></li>
                            @guest

                           @if (Route::has('register'))
                                <li>
                                    <li class="btn btn-outline-success"><a href="{{ route('login') }}">{{ __('Vendor Login') }}</a></li>
                                    <li class="btn btn-outline-danger"><a href="{{route('register')}}">{{ __('Become Vendor') }}</a></li>
                                </li>
                            @endif
                        @else


                        <li class="submenu">

                                @if (Auth::user()->urole == 'admin')
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fas fa-user-shield"></i>  Admin
                                </a>
                                @elseif (Auth::user()->urole == 'superadmin')
                                <a href="{{ route('superadmin.users.index') }}">
                                    <i class="fas fa-user-shield"></i> Super Admin
                                </a>
                                @else
                                <a href="#">{{Auth::user()->name}}</a>
                                @endif

                            <ul>
                                <li><a href="{{url('vendor/dashboard')}}">Dashboard</a></li>
                                <li><a href="#">profile (Edit Profile)</a></li>
                                <li><a href="#">Settings (0)</a></li>
                                <li><a href="#">Analysist</a></li>
                                <li><a href="#">Message (0)</a></li>
                                <li> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form></li>

                            </ul>
                        </li>
                        @endguest



                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

   @yield('content')

   {{-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                    </div>
                    <ul>
                        <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                        <li><a href="#">hexashop@company.com</a></li>
                        <li><a href="#">010-020-0340</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <li><a href="#">Men’s Shopping</a></li>
                    <li><a href="#">Women’s Shopping</a></li>
                    <li><a href="#">Kid's Shopping</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Tracking ID</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

                    <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                    <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> --}}


<!-- jQuery -->
<script src="{{ asset('frontend/main/assets/js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{ asset('frontend/main/assets/js/popper.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{ asset('frontend/main/assets/js/owl-carousel.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/accordions.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/datepicker.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/scrollreveal.min.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/imgfix.min.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/slick.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/lightbox.js')}}"></script>
<script src="{{ asset('frontend/main/assets/js/isotope.js')}}"></script>

<!-- Global Init -->
<script src="{{ asset('frontend/main/assets/js/custom.js')}}"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);

        });
    });

</script>

</body>
</html>
