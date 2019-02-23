@extends('layouts.master')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.sidebar')
@include('layouts.meta')

@section('main-content')
    <div class="content-wrapper">
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Company Profile                                          <a href="{{route('college.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
    	<form action="{{route('college.update', $college->id)}}" method="post"  enctype="multipart/form-data">
         {{ csrf_field() }}
         {{method_field('PATCH')}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Company Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$college->name}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$college->address}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" value="{{$college->contact}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{$college->mobile}}">
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="image">Email</label>
                            <input type="name" class="form-control" id="email" name="email" value="{{$college->email}}">
                        </div>
                    </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$college->facebook}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$college->twitter}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Image Input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input class="custom-file-input imagechk" id="image" name="image" value="{{asset('images/profile/'.$college->image)}}" type="file">
                            <input type="hidden" name="image" value="{{$college->image}}">
                            <label class="custom-file-label" for="exampleInputFile" id="imageink">{{asset('images/profile/'.$college->image)}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="" class="btn btn-danger">Cancel</a>
            </div>
        </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        $('.imagechk').change(function () {

            var value = $(this).val();


            $('#imageink').text(value);
        });
    </script>
@endsection