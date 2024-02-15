<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @php
    $settings = \App\Models\Settings::pluck('value', 'key')->toArray();
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ config('app.url') . 'storage/' . $settings["icon"]}} " type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/custom.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <!-- [if lt IE 9] -->
    @livewireStyles
</head>

<body class="clinic_version">
 

    <!-- LOADER -->
    <div id="preloader">
        <a href="{{ url('/') }}"><img class="preloader" src="{{ config('app.url') }}images/loaders/heart-loading2.gif" alt=""></a>
    </div>
    <!-- END LOADER -->
    <header>
        <div class="header-top wow fadeIn">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ config('app.url') . 'storage/' . $settings["logo"] }}"
                        alt="logo image "></a>
                <div class="right-header">
                    <div class="header-info">
                        <div class="info-inner">
                            <span class="icontop"><img src="{{ config('app.url') }}images/phone-icon.png" alt="#"></span>
                            <span class="iconcont"><a
                                    href="tel:{{ $settings["phone"] ?? '123 123 123' }}">{{ $settings["phone"] ?? '123 123 123' }}</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll
                                    href="mailto:{{ $settings["email"] ?? 'tauseed@test.com' }}">{{ $settings["email"] ?? 'tauseed@test.com' }}</a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll href="#">Daily:
                                    {{ $settings["working_horse"] ?? '7:00 AM - 8:00 PM' }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom wow fadeIn">
            <div class="container-fluid">
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
                @livewire('search')
            </div>
        </div>
    </header>
    <main id="main">
        @yield('content')
    </main>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo padding">
                        <a href="{{ url('/') }}"><img src="{{ 'storage/'.$settings["logo"] ??  config("app.url").'images/logo.png' }}"
                                alt=""></a>
                        <p>{{ $settings["description"] ?? 'hi this isLocavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.' }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-info padding">
                        <h3>CONTACT US</h3>
                        <p><i class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $settings["address"] ?? 'distric abc P/O xyz sorana' }}
                        </p>
                        <p><i class="fa fa-paper-plane"
                                aria-hidden="true"></i>{{ $settings["email"] ?? 'tauseed@test.com' }}
                        </p>
                        <p><i class="fa fa-phone"
                                aria-hidden="true"></i>{{ $settings["phone"] ?? '123 123 123' }}</p>
                    </div>
                </div>
                @livewire('subscribe')
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
    @livewireScripts
    <!-- all js files -->
    {{-- <script src="js/all.js"></script> --}}
    <script src="{{ asset('js/all-in-one.js') }}"></script>
    <!-- all plugins -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        function check_active(d) {
            document.getElementById(d).addAttribute('class', 'active');
        }

    </script>
</body>

</html>
