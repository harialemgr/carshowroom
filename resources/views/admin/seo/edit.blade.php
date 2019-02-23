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
                    <h3 class="card-title">Edit SEO                                          <a href="{{route('seo.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('seo.store')}}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Tag</label>
                                    <input type="text" class="form-control" id="tag" name="tag" value="{{$seo->tag}}">
                                </div>
                            </div>
                        </div>









                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('seo.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection