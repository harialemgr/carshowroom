@extends('frontend.master')
@section('main-content')


<div class="container-fluid" style="background-color:black;padding-top:50px;color:white;" id="car_collection">
        <div class="row">
                {{-- <div class="col-sm-12">
                        
                                @php $i=1 @endphp  
                                              
                                @foreach($cars1 as $car)
                                        @if($i==5 || $i==1)
                                        <div class="row" style="text-align:center;margin:0">
                                        @endif
                                            <div class="col-sm-3" style="margin-bottom:35px"> 
                                                <img src="{{ asset('storage/car/'.$car->image)}}" width="255px" height="150px" style="border:5px brown solid;border-radius:5%">  
                                                <h3>{{ $car->name}}</h3>
                                                <p style="padding:0;margin:0px 33px;font-size:15px; line-height:20px;text-align:justify;">{{ $car->description }}</p>
                                                @php $i++ @endphp
                                            </div>  
                                              @if($i==5)
                                                        </div>
                                                        @php $i=1 @endphp
                                                
                                                @endif                                                            
                                @endforeach
                        
                        </div>  --}}



        <section class="banner-bottom-wthree py-5 px-4">
            <div class="row banner-grids">
            @php $cnt=0; @endphp
            @foreach($cars1 as $car)

                @if($cnt%2==0)
                <div class="col-md-6 content-right-bottom text-right py-5">
                    <img src="{{asset('storage/car/'.$car->image)}}" alt="news image" id="carimage" class="img-fluid">
                </div>
                @endif
                <div class="col-md-6 content-left-bottom text-left pr-lg-5 py-5">
                    <h4>{{$car->name}}</h4>
                    <p class="mt-2 text-left">{{$car->description}}</p>

                </div>
                @if($cnt%2!=0)
                <div class="col-md-6 content-right-bottom text-right py-5">
                    <img src="{{asset('storage/car/'.$car->image)}}" alt="news image" id="carimage" class="img-fluid">
                </div>
                @endif
                
                @php $cnt++; @endphp

            @endforeach
        </div>
    </section>
                </div>    
              
        </div>
</div>

 
@endsection