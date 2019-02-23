@extends('frontend.master')
@section('main-content')
<nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top">
    <span style="display: inline;">      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="#" id="l">
                <img id="vntetwork-logo" type="image" src="assets/logo.png" height="30px" width="50px">
                <span id='internet'>internet</span><span id="provider">provider</span>
         </a>
    </span>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav  ml-auto" id="l1">
              
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('home')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           HOME</a>
                         
                        
                            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown" style="position:absolute;top:100px;left:-300px;">
                            <div class="row">
                             <div class="col-sm-6" style="color:#14a0f8;">
                              <h4> SUPPORT</h4>
                              <ul style="list-style-type:none;">
                                  <li><a href="#">ONLINE SUPPORT</a></li><br>
                                  <li><a href="#">PROGRAM POLICY</a></li><br>
                                  <li><a href="#">IDENTITY GUIDELINES</a></li><br>
                                  <li><a href="#">DEVELOPMENT PROCESS</a></li><br>
                                  <li><a href="#">HELP</a></li><br>
                                  <li><a href="#">SUPPORT SYSTEM</a></li><br>
                                  <li><a href="#">RETURNS</a></li><br>
                              </ul>
                            </div>
                            <div class="col-sm-6">
                              <div class="simple-flexbox-container-nav">
                                <div class="simple-flexbox-item" style="background-color: #14a0f8;">
                                    <div class="item1 p-1"><span style="margin-right:20px; font-size:30px;">UNLIMITED</span><span class="dot1">&nbsp;&nbsp;A</span></div>
                                    <div class="item2 p-1"><span style="color:yellow;font-size:40px;">20</span> Mbit/sec &nbsp; &nbsp; <b style="font-size:30px;">$4</b>/month</span></div>
                                    <div class="item3 p-1">Traffic: Unlimited</div>
                                    <div class="item4 p-1"><button type="button" class="btnnav">CONNECT NOW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons" style="color:blue;font-size:25px;position:absolute;">arrow_forward</i></button></div>               
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('prices')}}">PRICING</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('ourteam')}}">OUR TEAM</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('testimonials')}}">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('careers')}}">CAREER</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('blogs')}}">BLOG</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('contact')}}">CONTACTS</a>
                    </li>
                </ul>
        </div>  
      </nav>
      <br>
      
      <div class="container">
        <h3>Collapsible Navbar</h3>
        <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
        <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p>
      </div>
@endsection