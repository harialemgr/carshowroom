@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page">SUPPORT</li>
  </ol>
</nav>

{{-- <div class="container-fluid"> --}}
<div class="container-fluid ">
  <div class="row">
    <div class="col-md-12" style="text-align: justify; padding: 20px 80px 0px 80px;">
      <h2 class="hd" style="color: #14a0f8;">{{ $support_details->title }}</h2>
      {{-- <p >{!! str_replace(array('<p>', '</p>'), '', $support_details->summary) !!}</p> --}}
      {{-- <p >{{ str_replace(array('<p>', '</p>'), '', $support_details->summary) }}</p> --}}
      <p >{!! $support_details->summary !!}</p>

      <br>
</div>
      {{-- <div class="col-md-4">
        <img src="assets/img1.jpg" class="img-fluid" cursor="pointer">
      </div> --}}
    </div>
  </div>



@endsection