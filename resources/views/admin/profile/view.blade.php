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
                    <h3 class="card-title">Company Profile </a>
                    </h3>

                </div>
                <div class="card-body">

  <div class="card" style="width: 50rem; background: white; padding: 20px;">
    <div class="text-center"> 
 <img src="{{asset('images/profile/'.$college->image)}}" height="200" >
 </div>
  <div class="card-body">

    <h2 class="card-title text-center"><strong>{{$college->name}}</strong></h2>
   
    <h3 class="card-text text-center" style="margin-top:-7px;">{{$college->address}}</h3>
    <h4 class="card-text text-center company" style="margin-top:20px">Contact: {{$college->contact}}</h4>
     <h4 class="card-text text-center company" style="margin-top:20px">Mobile: {{$college->mobile}}</h4>
    <h4 class="card-text  text-center  company">Email: {{$college->email}}</h4>
    <h4 class="card-text text-center  company">Facebook: {{$college->facebook}}</h4>
    <h4 class="card-text text-center  company">Twitter: {{$college->twitter}}</h4>
    <div class="text-center">
       <a href="{{route('college.edit',$college->id)}}" class="btn btn-primary">Edit</a>
    </div>
   </div>
</div>

                </div>
            </div>
        </section>
    </div>

@endsection