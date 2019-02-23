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
                    <h3 class="card-title">SEO</a>
                    </h3>

                </div>
                <div class="card-body">

      <h3>{{$seos->tag}}</h3>
      <a href="{{route('seo.create' )}}"  class="btn btn-primary">Edit</a>
                </div>
            </div>
        </section>
    </div>


@endsection