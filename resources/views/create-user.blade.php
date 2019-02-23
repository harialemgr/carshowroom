{{--@extends('layouts.master')
@include('layouts.meta')
{{--@include('layouts.header')
@include('layouts.footer')
@include('layouts.sidebar')

@section('page-info')
    <title>Create User | Bright Lab</title>
@endsection

@section('main-content')
    <div class="content-wrapper">
        <div class="content">
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <h3>Create new user</h3>
                <div class="row">
                    @if(Session::has('fail_msg'))
                        <div class="col-lg-12">
                            <p class="alert alert-success">{{ Session::get('fail_msg') }}</p>
                        </div>
                        <script>
                            $('.alert').delay(1000).fadeOut(2000);
                        </script>
                    @endif
                    <div class="form-group col-lg-6">
                        <label>Name*</label>
                        <input class="form-control" type="text" name="name" placeholder="Required." required />
                        @if($errors->has('name'))<span class="error-msg">{{ $errors->first('name') }}</span> @endif
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Email*</label>
                        <input class="form-control" type="email" name="email" placeholder="Required." required />
                        @if($errors->has('email'))<span class="error-msg">{{ $errors->first('email') }}</span> @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label>Password*</label>
                        <input class="form-control" type="password" name="password" placeholder="Required." required />
                        @if($errors->has('password'))<span class="error-msg">{{ $errors->first('password') }}</span> @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <input class="btn btn-primary" type="submit" value="Register" style="margin-top:5px;" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
--}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .login-page{background-color:#ecf0f5;}
        .login-box-body{border:1px solid rgb(220,220,220);border-radius:5px;}
    </style>
</head>
<body class="hold-transition login-page">
<div class="row" style="background-image:url({{ URL::asset('images/lab.jpg')}}); height: 100%;">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}"><b>Bright</b>CMS</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Create User</p>

            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-full">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
