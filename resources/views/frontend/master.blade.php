@extends('layouts.layout')
@include('inc.meta')
@include('layouts.meta')
@include('inc.header')
{{-- @php
 $titles = App\Http\Controllers\HomeController::getSupportTitles($category_id);
 $adminprofile = App\Http\Controllers\HomeController::getGeneralSetting();
  //ar_dump($titles);
  foreach($titles as $support_title) {
     echo($support_title['title'] . "<br>");
  } 
@endphp  --}}
{{-- @include('inc.navbar') --}}

@section('navbar')
<style>
.footer_heading{
        color:white;
        text-transform:uppercase;
        text-align:center;
        padding-bottom:20px;
        font-weight:900;
      }
</style>
@php $adminprofile = App\Http\Controllers\HomeController::getGeneralSetting() @endphp

 
<nav class="navbar navbar-expand-sm bg-info navbar-light sticky-top">
                  <span>      
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                  <a class="navbar-brand" href="{{route('home')}}" id="l"> </a>
                  </span>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav  ml-auto" id="l1">
              
                    <li class="nav-item dropdown  {{ request()->is('/') ? 'active1' : '' }}">
                    <a href="{{route('home')}}" class="nav-link"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           HOME
                          </a>
                     
                    </li>
                    <li class="nav-item {{ request()->is('about*') ? 'active1' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                    </li>
                    {{-- <li class="nav-item {{ request()->is('prices*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('prices')}}">PRICING</a>
                    </li>
                    <li class="nav-item {{ request()->is('testimonials*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('testimonials')}}">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item {{ request()->is('careers*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('careers')}}">CAREER</a>
                    </li> --}}
                    <li class="nav-item  {{ request()->is('blogs*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('blogs')}}">BLOG</a>
                    </li>
                    <li class="nav-item  {{ request()->is('contact*') ? 'active1' : '' }}">
                      <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
        </div>  
      </nav>

  
@endsection

{{-- @include('inc.footer') --}}
{{-- footer starts --}}

@section('footer')
{{-- 

 --}}
@php
 $head_branch = App\Http\Controllers\HomeController::getHeadBranch();
 $social_links = App\Http\Controllers\HomeController::getSocialLinks();
 
@endphp


<div class="container-fluid" style="background-color:black; padding-top:30px; padding-bottom:100px;" id="contact">
    {{-- <div class="row">
        <div class="col-sm-6 offset-md-4 footerImage">
            <img src="{{ $adminprofile->logo != '' ? asset('/storage/logo/'.$adminprofile->logo) : asset('/storage/logo/noimage.png')}}" height="150px" width="400px">
        </div>
    </div> --}}
        <div class="footer_heading">
        <h1>speed & shine autozone pvt.ltd.</h1>
        </div>
   

    <div class="row footer">
        <div class="col-md-4">
            <div class="footer-icons">
            <p><i class="fas fa-map-marker-alt"></i> &nbsp;Address</p>
            </div>
            <div class="footer-text">
                <p>
                @if(isset($footer->address))
                {{ $footer->address }}
                @else
                 Butwal,Nepal
                @endif
                
                </p>
            </div>
        </div>
        <div class="col-md-4">
           <div class="footer-icons">
            <p><i class="fas fa-phone fa-flip-horizontal"></i> &nbsp;Telephones</p>
            </div>
            <div class="footer-text">

                <p>
                @if(isset($footer->phno))
                {{ $footer->phno }}
                @else
              +9779847000000
                @endif
                </p>
            </div>

        </div>
      
   
        <div class="col-md-4">
           <div class="footer-icons">
            <p>&nbsp;Follow us</p>
            </div>
            <div class="footer-text">
                <div class="">
                    <a class="fab fa-facebook" style="text-decoration: none;" href="
                      @if(isset($footer->facebook))
                       {{ $footer->facebook }}
                       @else
                       www.facebook.com
                       @endif
                        "></a>
                    <a class="fab fa-twitter" style="text-decoration: none;" href="
                    @if(isset($footer->twitter))
                    {{ $footer->twitter }}
                    @else
                    www.twitter.com
                    @endif
                    "></a>
                    <a class="fab fa-google-plus" style="text-decoration: none;" href="
                    @if(isset($footer->gmail))
                    {{ $footer->gmail }}
                    @else
                      no address
                    @endif
                    "></a>
                    <a class="fab fa-linkedin" style="text-decoration: none;" href="
                    @if(isset($footer->linkin))
                    
                    {{ $footer->linkin }}
                    
                    @else

                     no address     
                    @endif
                    "></a>
                    <a class="fab fa-instagram" style="text-decoration: none;" href="
                    @if(isset($footer->instagram))
                    {{ $footer->instagram }}
                    @else
                    no address
                    @endif
                    "></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row map" style="align:center;margin-top:0px;">
        <iframe src="{{$footer->googlemap}}" width="100%" height="250px" frameborder="0" id="map" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<div class="container-fluid w-100" style="background-color:#f4f4f4;">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-top:20px;">
        <p>&copy; Internet Provider</p>
    </div>
</div>
@endsection