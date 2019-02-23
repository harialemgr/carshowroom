@extends('layouts.master')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.sidebar')
@include('layouts.meta')

@section('main-content')
    <div class="content-wrapper">


        <!-- Main content -->
        <div class="content">

        </div>
        {{--<div class="content">--}}
            {{--@if(Session::has('success_msg'))--}}
                {{--<p class="alert alert-success">{{ Session::get('success_msg') }}</p>--}}
            {{--@endif--}}
            {{--@if(Session::has('fail_msg'))--}}
                {{--<p class="alert alert-danger">{{ Session::get('fail_msg') }}</p>--}}
            {{--@endif--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                    {{--<a href="{{ route('tests',[date('Y-m-d'),date('Y-m-d')]) }}">--}}
                    {{--<div class="info-box">--}}
                        {{--<span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>--}}
                        {{--<div class="info-box-content">--}}
                            {{--<span class="info-box-text">Daily Tests</span>--}}
                            {{--<span class="info-box-number">{{ count($daily_tests) }}</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                    {{--<a href="{{ route('test.index') }}">--}}
                    {{--<div class="info-box">--}}
                        {{--<span class="info-box-icon bg-red"><i class="fa fa-flask"></i></span>--}}
                        {{--<div class="info-box-content">--}}
                            {{--<span class="info-box-text">Available Tests</span>--}}
                            {{--<span class="info-box-number">{{ count($all_tests) }}</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                    {{--<a href="{{ route('income',[date('Y-m-d'),date('Y-m-d')]) }}">--}}
                    {{--<div class="info-box">--}}
                        {{--<span class="info-box-icon bg-green"><i class="fa fa-rupee"></i></span>--}}
                        {{--<div class="info-box-content">--}}
                            {{--<span class="info-box-text">Daily Income</span>--}}
                            {{--<span class="info-box-number">{{ $daily_income }}</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="box box-solid">--}}
                        {{--<div class="box-header">--}}
                            {{--<h3 class="box-title" style="font:Bold 1em 'Arial',sans-serif;">Tests History</h3>--}}
                        {{--</div>--}}
                        {{--<div class="box-body row" style="padding-bottom: 30px;">--}}
                            {{--<form action="{{ route('test_report') }}" method="GET">--}}
                                {{--<div class="col-lg-3">--}}
                                    {{--<label>Start Date</label>--}}
                                    {{--<input type="text" class="form-control pull-right" id="datepicker10" name="start_date">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-3">--}}
                                    {{--<label>End Date</label>--}}
                                    {{--<input type="text" class="form-control pull-right" id="datepicker20" name="end_date">--}}
                                {{--</div>--}}

                                {{--<div class="col-lg-1" style="margin-top: 30px;">--}}
                                    {{--<span class="label label-danger text-center" > Or</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-3">--}}
                                    {{--<label>Invoice No</label>--}}
                                    {{--<input type="text" class="form-control pull-right" id="invid" name="invno" placeholder="205">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-2">--}}
                                    {{--<input class="btn btn-warning margin" type="submit" value="Submit"  style="margin-top: 25px;"/>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="box box-solid">--}}
                        {{--<div class="box-header">--}}
                            {{--<h3 class="box-title" style="font:Bold 1em 'Arial',sans-serif;">Income</h3>--}}
                        {{--</div>--}}
                        {{--<div class="box-body row" style="padding-bottom: 30px;">--}}
                            {{--<form action="{{ route('income_report') }}" method="GET">--}}
                                {{--<div class="col-lg-5">--}}
                                    {{--<label>Start Date</label>--}}
                                    {{--<input type="text" class="form-control pull-right" id="datepicker30" name="start_date">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-5">--}}
                                    {{--<label>End Date</label>--}}
                                    {{--<input type="text" class="form-control pull-right" id="datepicker40" name="end_date">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-2">--}}
                                    {{--<input class="btn btn-warning margin" type="submit" value="Submit" style="margin-top: 25px;" />--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <script>
        $('.alert').delay(4000).fadeOut(2000);
        $(document).ready(function() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd
            }

            if (mm < 10) {
                mm = '0' + mm
            }

            today = yyyy + '-' + mm + '-' + dd;
            $('#datepicker10').val(AD2BS(today));
            $('#datepicker20').val(AD2BS(today));
            $('#datepicker30').val(AD2BS(today));
            $('#datepicker40').val(AD2BS(today));
        });
    </script>
@endsection