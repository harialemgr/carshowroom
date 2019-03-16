@extends('frontend.master')
@section('main-content')


<div class="container-fluid" style="background-color:black;padding-top:50px;color:white;" id="car_collection">
        <div class="row">
                <div class="col-sm-12">
                        
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
                        
                        </div> 
                </div>    
              
        </div>
</div>
<hr>
 
@endsection