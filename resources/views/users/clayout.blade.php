<!doctype html>
<html lang="en">
  <head>
    <title>Stock Market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/owl.carousel.min.css')
}}">
    <!--header icon CSS -->
    <link rel="icon" href="{{ url('resources/views/users/assets/img/fabicon.png')}}">
    <!-- animations CSS -->

    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/animate.min.css') }} ">
    <!-- font-awsome CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/font-awesome.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/bootstrap.min.css') }} ">
    <!-- mobile menu CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/slicknav.min.css') }} ">
    <!--css animation-->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/animation.css')}}">
    <!--css animation-->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/material-design-iconic-font.min.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/style.css')}}">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/responsive.css')}}">
  </head>
  <body>

    <!--header area start-->
    <div class="header-area wow fadeInDown header-absolate" id="nav" data-0="position:fixed;" data-top-top="position:fixed;top:0;" data-edge-strategy="set">
        <div class="container">
            <div class="row">
                <div class="col-4 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-4 col-lg-2">
                    <div class="logo-area">
                        <a href="#"><img style="width:25px; height:30px;" src="u rl('resources/views/users/assets/img/') }}"alt=""></a>
                    </div>
                </div>
                <div class="col-4 col-lg-8 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                              <ul id="slick-nav">
                                <li><a class="scroll" href="{{ url('/') }}">home</a>
                                    <!-- <ul>
                                        <li><a href="index.html">Version 1</a></li>
                                        <li><a href="index2.html">Version 2</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                    </ul>
                                    -->
                                </li>
                                <li><a class="scroll" href="{{ url('/#about') }}">About</a>
                                </li>
                                <li><a class="scroll" href="{{ url('/#Comp') }}">Companies</a></li>
                                <li><a class="scroll" href="{{ url('/#token') }}">Share Sale</a></li>
                                <li><a class="scroll" href="{{ url('/#roadmap') }}">Roadmap</a></li>
                                <li><a class="scroll" href="{{ url('/#team') }}">Team</a></li>
                                <li><a class="scroll" href="{{ url('/#apps') }}">Message</a></li>
                                <li><a class="scroll" href="{{ url('/#faq') }}">FAQ</a></li>
                                <li><a class="scroll" href="{{ url('/#contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
             
                
            </div>
        </div>
    </div>
    <!--header area end-->

                        <div>
                        @yield('content')
                 
                        </div>
    <!--footer area start-->

    <!--footer area end-->

    <!-- jquery 2.2.4 js-->
    <script src="{{ url('resources/views/users/assets/js/jquery-2.2.4.min.js')}}"></script>
    <!-- popper js-->
    <script src="{{ url('resources/views/users/assets/js/popper.js')}}"></script>
    <!-- carousel js-->
    <script src="{{ url('resources/views/users/assets/js/owl.carousel.min.js')}}"></script>
    <!-- wow js-->
    <script src="{{ url('resources/views/users/assets/js/wow.min.js')}}"></script>
    <!-- bootstrap js-->
    <script src="{{ url('resources/views/users/assets/js/bootstrap.min.js')}}"></script>
    <!--skroller js-->
    <script src="{{ url('resources/views/users/assets/js/skrollr.min.js')}}"></script>
    <!--mobile menu js-->
    <script src="{{ url('resources/views/users/assets/js/jquery.slicknav.min.js')}}"></script>
    <!--particle s-->
    <script src="{{ url('resources/views/users/assets/js/particles.min.js')}}"></script>
    <!-- main js-->
    <script src="{{ url('resources/views/users/assets/js/main.js')}}"></script>
  </body>
</html>