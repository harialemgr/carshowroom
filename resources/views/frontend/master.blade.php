@extends('layouts.layout', ['category_id' => $category_id])
@include('inc.meta')
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
@php $adminprofile = App\Http\Controllers\HomeController::getGeneralSetting() @endphp

 
<nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top">
                  <span>      
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                  <a class="navbar-brand" href="{{route('home')}}" id="l">
                        <img id="vntetwork-logo" type="image" src="{{ $adminprofile->logo != '' ? asset('storage/logo/'.$adminprofile->logo) : asset('/storage/logo/noimage.png')}}" height="70px">
                        {{-- <span id='internet'>internet</span><span id="provider">provider</span> --}}
                  </a>
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
                    <li class="nav-item {{ request()->is('prices*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('prices')}}">PRICING</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="{{route('ourteam')}}">OUR TEAM</a>
                    </li> --}}
                    <li class="nav-item {{ request()->is('testimonials*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('testimonials')}}">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item {{ request()->is('careers*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('careers')}}">CAREER</a>
                    </li>
                    <li class="nav-item  {{ request()->is('blogs*') ? 'active1' : '' }}">
                      <a class="nav-link" href="{{route('blogs')}}">BLOG</a>
                    </li>
                    <li class="nav-item  {{ request()->is('contact*') ? 'active1' : '' }}">
                      <a class="nav-link" href="#contact">CONTACTS</a>
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
<div class="container-fluid" style="background-color:black; padding-top:100px; padding-bottom:100px;" id="contact">
    {{-- <div class="row">
        <div class="col-sm-6 offset-md-4 footerImage">
            <img src="{{ $adminprofile->logo != '' ? asset('/storage/logo/'.$adminprofile->logo) : asset('/storage/logo/noimage.png')}}" height="150px" width="400px">
        </div>
    </div> --}}

      <div class="row map" style="align:center;margin-top:0px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14139.82364478003!2d83.491024!3d27.6258821!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1544594680381" width="100%" height="250px" frameborder="0" id="map" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="row footer">
        <div class="col-md-4">
            <div class="footer-icons">
            <p><i class="fas fa-map-marker-alt"></i> &nbsp;Address</p>
            </div>
            <div class="footer-text">
                <p>
                @if(isset($head_branch->address))
                {{ $head_branch->address }}
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
                @if(isset($head_branch->contact))
                {{ $head_branch->contact }}
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
                    <a class="fab fa-facebook" style="text-decoration: none;" href="{{ $social_links->facebook }}"></a>
                    <a class="fab fa-twitter" style="text-decoration: none;" href="{{ $social_links->twitter }}"></a>
                    <a class="fab fa-google-plus" style="text-decoration: none;" href="{{ $social_links->google_plus }}"></a>
                    <a class="fab fa-linkedin" style="text-decoration: none;" href="{{ $social_links->linkedin }}"></a>
                    <a class="fab fa-instagram" style="text-decoration: none;" href="{{ $social_links->instagram }}"></a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="container-fluid w-100" style="background-color:#f4f4f4;">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-top:20px;">
        <p>&copy; Internet Provider</p>
    </div>
</div>
@endsection