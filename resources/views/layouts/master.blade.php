<!DOCTYPE html>
<html lang="en">
    <title>{{ config('app_name','VNETWORK') }}</title>
<head>
    @yield('page-info')
    @yield('meta-content')
</head>
<body class="hold-transition sidebar-mini">
{{--<div id="load"><span id="load_content" class="text-blue"><i class="fa fa-spinner fa-pulse fa-3x-fa-fw"></i></span></div>--}}
<div class="wrapper">
    @yield("header-content")
    @yield("side-bar-content")
    @yield("main-content")
    @yield("footer-content")
</div>
    @yield('script-links')
    @yield('scripts')
</body>
</html>