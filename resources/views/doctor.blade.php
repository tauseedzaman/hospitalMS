@extends('layouts.app')
@section('content')
<br><br><br>
<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
    <div class="container">
     <div class="heading">
           <span class="icon-logo"><img src="{{ App\Models\general_settings::latest()->first() ? config('app.url') . 'storage/' . App\Models\general_settings::latest()->first()->favicon_path :  config("app.url").'images/favicon.png' }}" alt="#"></span>
           <h2>The Specialist Clinic</h2>
        </div>
        <div class="row dev-list text-center">
            @foreach ($doctors as $doctor)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                <div class="widget clearfix">
                    <img src="{{ $doctor->photo_path }}" alt="" class="img-responsive img-rounded">
                    <div class="widget-title">
                        <h3>{{ $doctor->name }}</h3>
                        <small>{{ $doctor->specialization }}</small>
                    </div>
                    <!-- end title -->
                    <p>Hello!, I am {{ $doctor->name }} a senior {{ $doctor->specialization }} director.</p>
                    <div class="footer-social">
                        <a href="www.facebook.com/{{ $doctor->name }}" class="btn grd1"><i class="fa fa-facebook"></i></a>
                        <a href="https://wa.me/{{ $doctor->phone }}" class="btn grd1"><i class="fa fa-whatsapp"></i></a>
                        <a href="tel:{{ $doctor->phone }}" class="btn grd1"><i class="fa fa-phone"></i></a>
                    </div>
                </div><!--widget -->
            </div><!-- end col -->
                 @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
  </div>
@endsection
