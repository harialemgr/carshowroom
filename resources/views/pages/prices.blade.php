@extends('frontend.master')
@section('main-content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
               
                  <li class="breadcrumb-item active" aria-current="page">PRICING</li>
                </ol>    
</nav>

<div class="container-fluid" style="background-color:white !important;">
        
        <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                        <h1 id="heading3">DETAILED</h1>
                </div>
                <div class="col-sm-2">
                </div>
        </div>
</div>
@php
  $count = 1;
@endphp
{{-- <div class="flexbox-container"> --}}
@foreach ($pricings as $key => $packagePrice)
   @if($count == 1)
     <div class="flexbox-container">
   @endif
    <div class="flexbox-item">
      <div class="row1 p-2" style="color:white;">{{ $packagePrice->traffic }}<span class="dot">{{ $letters[$key] }}</span></div>
      <div class="row2 p-2"><strong>{{ $packagePrice->speed }}</strong>{{ $packagePrice->unit }}</div>
      <div class="row3 p-2">Price: <b style="font-size:30px;">NRs. {{ $packagePrice->price }}</b><span style="font-size:20px;color:#E2821E">/{{$packagePrice->plan_type}}</div>
      <div class="row4 p-2">Traffic:<span style="color:#E2821E;"> {{ $packagePrice->traffic }}</span></div>
      <div class="row5 p-2">
      <form action="{{route('contact')}}">
      <button type="submit" class="btn1">CONNECT NOW
        {{-- <i class="material-icons" style="color:blue;font-size:20px;position:absolute;">arrow_forward</i> --}}
      </button></form></div>                
    </div>
    @if($count == 3)
        </div> 
    @endif  
    @php
    $count++;
    if($count == 4)
       $count = 1;
    @endphp    
@endforeach
</div> 
  
<div class="container-fluid" style="background-color:white !important;">
        
        <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                        <h1 id="heading3">SIMPLE</h1>
                </div>
                <div class="col-sm-2">
                </div>
        </div>
</div>


@php
  $count = 1;
@endphp

@foreach ($pricings as $key => $packagePrice)
   @if($count == 1)
     <div class="simple-flexbox-container">
   @endif
    <div class="simple-flexbox-item">
      <div class="item1 p-1">
        <span>{{ $packagePrice->traffic }}</span>
        <span class="dot1">&nbsp;&nbsp;{{ $letters[$key] }}</span>
      </div>
    <div class="item2 p-1"><span style="color:#0074B1;font-size:40px;">{{ $packagePrice->speed }}</span>{{ $packagePrice->unit }} &nbsp; <b style="color:#0074B1;font-size:20px">NRs.{{ $packagePrice->price }}</b>/<span style="font-size: 15px;">{{$packagePrice->plan_type}}</span></span></div>
      <div class="item3 p-1">Traffic: {{ $packagePrice->traffic }}</div>
      <div class="item4 p-1"><form href="{{route('contact')}}"><button type="submit" class="btnsimple">CONNECT NOW
        {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons" style="color:#8bc34a;font-size:25px;position:absolute;">arrow_forward</i> --}}
      </button></form></div>               
    </div>
    @if($count == 3)
        </div> 
    @endif  
    @php
    $count++;
    if($count == 4)
       $count = 1;
    @endphp 
@endforeach

  
</div>
@endsection