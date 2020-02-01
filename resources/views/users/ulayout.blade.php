<!doctype html>
<html lang="en">
  <head>
    <title>Stock Market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ url('resources/views/users/assets/css/owl.carousel.min.css')}}">
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
                                <li><a class="scroll" href="#home">home</a>
                                   <!-- <ul>
                                        <li><a href="index.html">Version 1</a></li>
                                        <li><a href="index2.html">Version 2</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                    </ul>
                                    -->
                                </li>
                                <li><a class="scroll" href="#about">About</a>
                                </li>
                                <li><a class="scroll" href="#Comp">Companies</a></li>
                                <li><a class="scroll" href="#token">Shares info</a></li>
                                <li><a class="scroll" href="#roadmap">Roadmap</a></li>
                                <li><a class="scroll" href="#team">Team</a></li>
                                <li><a class="scroll" href="#apps">FAQ</a></li>
                               
                                <li><a class="scroll" href="#contact">Contact</a></li>
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
    <div class="footera-area section-padding wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer">
                        <div class="logo-area footer">
                            <a href="#"><img src="assets/img/logo-top.png" alt=""></a>
                        </div>
                        <div class="space-20"></div>
                        <p>Stock market analysis and prediction is one of the interesting areas in which past data could be used to anticipate and predict data and information about future.  </p>
                        <div class="space-10"></div>
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Webapp is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href=
"#" target="_blank">Wasit Mirani & Muhammad Umer</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="single-footer">
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#Comp">Companies</a></li>
                            <li><a href="#token">Share Sale</a></li>
                            <li><a href="#roadmap">Roadmap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="single-footer">
                        <ul>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#apps">Message</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer">
                        <p>Subscribe to our Newsletter</p>
                        <div class="space-20"></div>
                        <div class="footer-form">
                            <form method="get" action="{{ url('/sub') }}">
                                 @csrf
                                <input type="email" placeholder="xyz@abx.com" class="{{ $errors->has('s_email') ? ' is-invalid' : '' }}" name="s_email" value="{{ old('') }}" required>
                                 @if ($errors->has('s_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('s_email') }}</strong>
                                    </span>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-outline-primary" name="submit"> 
                                 Go</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script>

        @if (session('s_msg'))
            const Toast = Swal.mixin({
              toast: true,
              position: 'bottom-end',
              showConfirmButton: false,
              timer: 3000
            });

            Toast.fire({
              type: 'success',
              title: "Subscribed successfully"
            });
    @endif

     @if ($errors->any())

            Swal.fire({
              type: 'error',
              title: 'Oops...',
              position: 'bottom-end',
              @foreach ($errors->all() as $error)
              text: "{{ $error }}",
              @endforeach
              footer: '<a href>Please try different E-Mail Address</a>'
            })

     @endif

</script>
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