@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page">OUR TEAM</li>
  </ol>
</nav>
<div class="container-fluid" style="background-color: white;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>OUR TEAM</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('assets/images/prakash.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <p class="card-title">Prakash Sharma</p>
                    <p class="card-text">Web Developer at Bright Office Systems</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('assets/images/prakash.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <p class="card-title">Prakash Sharma</p>
                    <p class="card-text">Web Developer at Bright Office Systems</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('assets/images/dvmuna.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <p class="card-title">Prakash Sharma</p>
                    <p class="card-text">Web Developer at Bright Office Systems</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('assets/images/prakash.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <p class="card-title">Prakash Sharma</p>
                    <p class="card-text">Web Developer at Bright Office Systems</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection