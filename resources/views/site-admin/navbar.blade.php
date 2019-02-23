@section('navbar-content')


         <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>YDMC</h3>
                    <strong>YD</strong>
                </div>

                <ul class="list-unstyled" style="color:blue;">
                    <li >
                        <a href="{{url('/dashboard')}}" >
                            <i class="glyphicon glyphicon-home"></i>
                            Dashboard
                        </a>
                        
                    </li>
                    <li>
                        <a href="{{route('news.index')}}">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            News and Events
                        </a>
                       </li>
                        <li>
                        <a href="{{route('category.index')}}">
                            <i class="glyphicon glyphicon-plus"></i>
                            Category
                        </a>
                    </li>
                       
                    <li>
                        <a href="{{route('staff.index')}}">
                            <i class="glyphicon glyphicon-user"></i>
                            Members
                        </a>
                    </li>
                    <li>
                        <a href="{{route('programs.index')}}">
                            <i class="glyphicon glyphicon-book"></i>
                            Programs
                        </a>
                    </li>
                    <li>
                        <a href="{{route('college.index')}}">
                            <i class="glyphicon glyphicon-education"></i>
                            College
                        </a>
                    </li>
                    <li>
                        <a href="{{route('gallery.index')}}">
                            <i class="glyphicon glyphicon-picture"></i>
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{route('slider.index')}}">
                            <i class="glyphicon glyphicon-arrow-right"></i>
                            Slider
                        </a>
                    </li>
                     <li>
                        <a href="{{route('aboutus.index')}}">
                            <i class="glyphicon glyphicon-asterisk"></i>
                            Aboutus
                        </a>
                    </li>
                    <li>
                        <a href="{{route('message.index')}}">
                            <i class="glyphicon glyphicon-envelope"></i>
                           Message
                        </a>
                    </li>
                     <li>
                        <a href="{{route('file.index')}}">
                            <i class="glyphicon glyphicon-download-alt"></i>
                           Downloads
                        </a>
                    </li>

                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content" style="width: 100%">

               <!--  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn  navbar-btn">
                                <i class="glyphicon glyphicon-align-left" >></i>
                                <div id="yd">
                                      <strong> YDMC</strong>
                                </div>
                              
                               
                            </button>
                        </div>

                        <div class="collapse navbar-collapse navbar-modify" id="bs-example-navbar-collapse-1" >
                            <ul class="nav navbar-nav navbar-right"  >
                                
                                 <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>


                            </ul>
                        </div>
                    </div>
                </nav> -->
 <nav class="navbar navbar-default navbar-expand-lg navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                     <button type="button" id="sidebarCollapse" class="btn  navbar-btn">
                                <i class="glyphicon glyphicon-align-left" ></i>
                                <div id="yd">
                                      <strong> YDMC</strong>
                                </div>
                              
                               
                            </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
                @yield('main-content')



                
            </div>
        </div>






         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     // $('.content').css({"left": "10px"})
                 });
             });
         </script>


@endsection