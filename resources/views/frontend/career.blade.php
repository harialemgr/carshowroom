@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">


                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                  <li class="breadcrumb-item active" aria-current="page">PAGES</li>
                  <li class="breadcrumb-item active" aria-current="page">CAREERS</li>
                </ol>
</nav>
<div class="container-fluid" style="background-color: white;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>CAREERS</h1>
        </div>
    </div>
    <div class="row" style="margin: 50px;">
        <div class="col-md-6 offset-md-3">
            <div class="list-group">
            @foreach ($careers as $career)
               <a href="{{route('career.show', $career->slug)}}" class="list-group-item list-group-item-action">{{ $career->title }}</a>     
            @endforeach
                {{-- <a href="{{route('careershow')}}" class="list-group-item list-group-item-action">Vacancy 1</a>
                <a href="#" class="list-group-item list-group-item-action">Vacancy 2</a>
                <a href="#" class="list-group-item list-group-item-action">Vacancy 3</a>
                <a href="#" class="list-group-item list-group-item-action">Vancancy 4</a>
                <a href="#" class="list-group-item list-group-item-action">Vacancy 5</a> --}}
            </div>
        </div>
    </div>

   
</div>
@endsection