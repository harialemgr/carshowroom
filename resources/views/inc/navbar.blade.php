@section('navbar')

<nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top">
                  <span>      
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                  <a class="navbar-brand" href="{{route('home')}}" id="l">
                        <img id="vntetwork-logo" type="image" src="{{ asset('assets/vnetlogo.png') }}" height="30px" width="50px">
                        <span id='internet'>internet</span><span id="provider">provider</span>
                  </a>
                  </span>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav  ml-auto" id="l1">
              
                    <li class="nav-item dropdown">
                    <a href="{{route('home')}}" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           HOME
                          </a>
                       
                    </li>
                  
                   
                    {{-- <li class="nav-item {{ strpos(URL::current(), 'about') ? 'active-nav' : '' }}"> --}}
                    <li class="nav-item {{ request()->is('about*') ? 'active' : '' }}">
                      <a class="nav-link" href="{{route('about')}}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('prices')}}">PRICING</a>
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
                      <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('contact')}}">{{ URL:: }}</a>
                    </li>
                </ul>
        </div>  
      </nav>

  
@endsection