@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">HOME</a></li>
    <li class="breadcrumb-item active" aria-current="page">TESTIMONIALS</li>
  </ol>
</nav>
<div class="container-fluid" style="background-color: white;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>TESTIMONIALS</h1>
        </div>
    </div>  
    @foreach ($testimonials as $testimonial)
        <blockquote class="blockquote text-center">
            <i class="fas fa-quote-right quote" style="background-color:#E2821E;color:white;"></i>
            <p class="mb-0">{{ $testimonial->description }}</p>
            <p class="person text-center" style="color:#E2821E">{{ $testimonial->name }}</p>
       </blockquote>
    @endforeach

    
</div>
@endsection