@section("header-content")
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                {{-- <a href="{{route('home')}}" class="nav-link">View Website</a> --}}
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-comments-o"></i>--}}
                    {{--<span class="badge badge-danger navbar-badge">3</span>--}}
                {{--</a>--}}

            {{--</li>--}}
            <!-- Notifications Dropdown Menu -->
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-bell-o"></i>--}}
                    {{--<span class="badge badge-warning navbar-badge">15</span>--}}
                {{--</a>--}}

            {{--</li>--}}
            <li class="dropdown notifications-menu nav-item" style="margin: 10px 10px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->email }} <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header"><a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    {{--<li class="header"><a href="{{ route('change_password') }}">Change Password</a></li>--}}
                    {{--<li class="header"><a href="{{ route('create_user') }}">Create User</a></li>--}}
                </ul>
            </li>

        </ul>
    </nav>
        {{--<nav class="navbar navbar-static-top">--}}
            {{--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
            {{--</a>--}}
            {{--<div class="navbar-custom-menu">--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li class="dropdown notifications-menu">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                            {{--{{ Auth::user()->email }} <i class="fa fa-angle-down"></i>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="header"><a href="{{ route('logout') }}"--}}
                                                  {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--Logout--}}
                                {{--</a></li>--}}
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                            {{--<li class="header"><a href="{{ route('change_password') }}">Change Password</a></li>--}}
                            {{--<li class="header"><a href="{{ route('create_user') }}">Create User</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}
@endsection