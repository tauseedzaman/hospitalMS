<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
     <!-- Basic -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
</head>
<body class="clinic_version">
          <!-- LOADER -->
          <div id="preloader">
            <a href="{{url('/')}}"><img class="preloader" src="images/loaders/heart-loading2.gif" alt=""></a>
         </div>
         <!-- END LOADER -->
         <header>
            <div class="header-top wow fadeIn">
               <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo.png" alt="image"></a>
                  <div class="right-header">
                     <div class="header-info">
                        <div class="info-inner">
                           <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                           <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                        </div>
                        <div class="info-inner">
                           <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                           <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
                        </div>
                        <div class="info-inner">
                           <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                           <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom wow fadeIn">
               <div class="container">
                  <nav class="main-menu">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                     </div>
                     
                     <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                           <li onclick="check_active('Home')"><a id="Home" href="{{ url('/') }}">Home</a></li>
                           <li onclick="check_active('Services')"><a id="Services" data-scroll href="#service">Services</a></li>
                           <li onclick="check_active('Doctors')"><a id="Doctors" data-scroll href="{{ url('docters') }}">Doctors</a></li>
                           <li onclick="check_active('Departments')"><a id="Departments" data-scroll href="#departments">Departments</a></li>
                           <li onclick="check_active('Testimonials')"><a id="Testimonials" data-scroll href="#testimonials">Testimonials</a></li>
                           <li onclick="check_active('About')"><a id="About" data-scroll href="{{ url('/about') }}">About us</a></li>
                           <li onclick="check_active('Contact')"><a id="Contact" data-scroll href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                     </div>
                  </nav>
                  <div class="serch-bar">
                     <div id="custom-search-input">
                        <div class="input-group col-md-12">
                           <input type="text" class="form-control input-lg" placeholder="Search" />
                           <span class="input-group-btn">
                           <button class="btn btn-info btn-lg" type="button">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
   
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}

        <main class="py-4">
            @yield('content')
        </main>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- all js files -->
    {{-- <script src="js/all.js"></script> --}}
    <script src="js/all-in-one.js"></script>
    <!-- all plugins -->
    <script src="js/custom.js"></script>
    <!-- map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
<script>
   function check_active(d){
      document.getElementById(d).addAttribute('class','active');
   }
</script>
</body>

</html>  