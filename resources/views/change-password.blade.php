@extends('layout.master')
@include('layout.meta')
@include('layout.header')
@include('layout.footer')
@include('layout.sidebar')

@section('page-info')
    <title>Change Password | Bright Lab</title>
@endsection

@section('main-content')
    <div class="content-wrapper">
        <div class="content">
            <form action="{{ route('change_password') }}" method="POST">
                {{ csrf_field() }}
                @if(Session::has('fail_msg'))
                    <p class="alert alert-danger">{{ Session::get('fail_msg') }}</p>
                @endif
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Old Password</label>
                        <input class="form-control" type="text" name="old_password" required />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>New Password</label>
                        <input class="form-control" type="text" name="new_password" required />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <input class="btn btn-primary" type="submit" value="Change" style="margin-top:5px;" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('.alert').delay(1000).fadeOut(2000);
    </script>
@endsection