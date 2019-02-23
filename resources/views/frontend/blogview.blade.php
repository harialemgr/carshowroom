@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page">BLOG</li>
    <li class="breadcrumb-item active" aria-current="page">{{ $blogDetails->title }}</li>
  </ol>
</nav>
<div class="container-fluid" style="background-color: white;">
    {{-- <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>{{ $blogDetails->title }}</h1>
        </div>
    </div> --}}
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if ($images[0] == 'noimage.jpg')
                    <img src="https://bit.ly/2GDaN1I" class="card-img-top">
                @else
                    <img src="{{asset('images/blog/'.$images[0])}}" class="card-img-top">
                @endif
                {{-- <img src="{{asset('assets/images/{{  }}')}}" class="card-img-top"> --}}
                <div class="card-body">
                    <a style="text-decoration:none;" href="{{route('blogview')}}" ><p class="card-title">{{ $blogDetails->title }}</p></a>
                    <p class="card-text">{!! $blogDetails->summary !!}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection