<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    {{ $app = App\Models\general_settings::latest()->first() }}>

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
    <link rel="apple-touch-icon"
        href="{{ $app ? config('app.url') . 'storage/' . $app->favicon_path : 'images/favicon.png' }}">
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
        <a href="{{ url('/') }}"><img class="preloader" src="images/loaders/heart-loading2.gif" alt=""></a>
    </div>
    <!-- END LOADER -->
    <header>
        <div class="header-top wow fadeIn">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ $app ? config('app.url') . 'storage/' . $app->logo_path : 'images/logo.png' }}"
                        alt="logo image "></a>
                <div class="right-header">
                    <div class="header-info">
                        <div class="info-inner">
                            <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                            <span class="iconcont"><a
                                    href="tel:{{ $app ? $app->business_phone : '123 123 123' }}">{{ $app ? $app->business_phone : '123 123 123' }}</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll
                                    href="mailto:{{ $app ? $app->business_email : 'tauseed@test.com' }}">{{ $app ? $app->business_email : 'tauseed@test.com' }}</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll href="#">Daily:
                                    {{ $app ? $app->working_horse : '7:00 AM - 8:00 PM' }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom wow fadeIn">
            <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li onclick="check_active('Home')"><a id="Home" href="{{ url('/') }}">Home</a></li>
                            <li onclick="check_active('Services')"><a id="Services" data-scroll
                                    href="{{ url('/services') }}">Services</a></li>
                            <li onclick="check_active('Doctors')"><a id="Doctors" data-scroll
                                    href="{{ url('docters') }}">Doctors</a></li>
                            <li onclick="check_active('Departments')"><a id="Departments" data-scroll
                                    href="#departments">Departments</a></li>
                            <li onclick="check_active('About')"><a id="About" data-scroll
                                    href="{{ url('/about') }}">About us</a></li>
                            <li onclick="check_active('Contact')"><a id="Contact" data-scroll
                                    href="{{ url('contact') }}">Contact</a></li>
                            @auth

                                @if (auth()->user()->is_super_admin)

                                    <li onclick="check_active('admin-area')"><a id="admin-area" data-scroll
                                            href="{{ route('admin_settings') }}">Admin Area</a></li>

                                @endif

                            @endauth

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

    {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> --}}
    {{-- </div> --}}

    <main class="py-4">
        @yield('content')
    </main>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo padding">
                        <a href="{{ url('/') }}"><img src="{{ $app ? $app->logo_path : 'images/logo.png' }}"
                                alt=""></a>
                        <p>{{ $app ? $app->description : 'hi this isLocavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.' }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-info padding">
                        <h3>CONTACT US</h3>
                        <p><i class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $app ? $app->address : 'distric abc P/O xyz sorana' }}
                        </p>
                        <p><i class="fa fa-paper-plane"
                                aria-hidden="true"></i>{{ $app ? $app->business_email : 'tauseed@test.com' }}
                        </p>
                        <p><i class="fa fa-phone"
                                aria-hidden="true"></i>{{ $app ? $app->business_phone : '123 123 123' }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="subcriber-info">
                        <h3>SUBSCRIBE</h3>
                        <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                        <div class="subcriber-box">
                            <form id="mc-form" class="mc-form">
                                <div class="newsletter-form">
                                    <input type="email" autocomplete="off" id="mc-email" placeholder="Email address"
                                        class="form-control" name="EMAIL">
                                    <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                                    <div class="clearfix"></div>
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div>
                                        <div class="mailchimp-success"></div>
                                        <div class="mailchimp-error"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-text">
                        <p>© {{ date('Y') }} <a id="tw" href="{{ url('') }}"
                                target="_blank">{{ env('APP_NAME') }}</a> , Inc</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="social-links">
                            <li><a href=""><i class="fa fa-rss"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyrights -->

    <!-- all js files -->
    {{-- <script src="js/all.js"></script> --}}
    <script src="js/all-in-one.js"></script>
    <!-- all plugins -->
    <script src="js/custom.js"></script>
    <script>
        function check_active(d) {
            document.getElementById(d).addAttribute('class', 'active');
        }

    </script>
</body>

</html>
