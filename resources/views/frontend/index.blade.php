@extends('frontend.master')
@include('layouts.meta')
@include('inc.meta')
@section('main-content')



<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('storage/wallpaper/'.$adminprofile->topwallpaper)}}"></div>

<div class="container-fluid" style="margin:0px;padding:0px;background-color:black !important;">
        
        <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4" style="text-align:center">
                        <h1 id="heading2">BEST<span id="hd">  DEALS</span></h1>
                </div>
                <div class="col-sm-4">
                </div>
        </div>
</div>

<div class="container-fluid" style="background-color: black;color:white;padding-top:50px">
        <div class="row">
                <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="abcd">
                                @foreach($cars as $car)
                                        <div class=""> 
                                          <img src="{{ asset('storage/car/'.$car->image)}}" height="250px" weight="300px">
                                              
                                                <h3>{{ $car->name}}</h3>
                                                <p>{{ $car->description }}</p>
                                        </div>                                      
                                @endforeach
                        </div> 
                </div>      

        </div>

</div>


<div class="container-fluid serve">
<div class="container services">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h3 class="heading1">our <span class="hd">services</span></h3>
    </div>
  </div>
  <div class="row">
  @foreach ($our_services as $service)
    <div class="col-md-4">
      <h4 class="security"><b>{{ $service->title }}</b></h4>
      <p class="s1" >{{ str_replace(array('<p>','</p>'), '',$service->description) }}</p>
    </div> 
  @endforeach

    {{-- <div class="col-md-4">
      <h4 class="security"><b>Software Development</b></h4>
      <p class="s1">Whether you have a start-up project to launch, an idea for a custom software solution for your company, or you are engaged in software product development, Internet Provider is ready to provide full-cycle software development services at each stage of your project.</p>
    </div>  
    <div class="col-md-4">
      <h4 class="security"><b>Technology Consulting</b></h4>
      <p class="s1">Security breaches are on the rise, and it’s not just large organizations that are being targeted. All businesses must take measures to protect their networks and sensitive information from threats, vulnerabilities, and malicious attacks. Our IT security team will work with you to identify and manage your risk.</p>
    </div>  
      <div class="col-md-4">
      <h4 class="security"><b>Technology Consulting</b></h4>
      <p class="s1">Security breaches are on the rise, and it’s not just large organizations that are being targeted. All businesses must take measures to protect their networks and sensitive information from threats, vulnerabilities, and malicious attacks. Our IT security team will work with you to identify and manage your risk.</p>
    </div>   --}}
  </div>
</div>
</div>

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
                <div class="row" style="padding-left:45%;padding-bottom:50px;" >
                    <a href="{{route('cars')}}" class="btn btn-primary" id="car_collection_btn">see more </a>
                </div>  
        </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('storage/wallpaper/'.$adminprofile->bottomwallpaper)}}"></div>

<style>
.modal-body{
     
}
.image{


}
</style>
  {{-- @if(!isset($_SERVER['HTTP_REFERER']))
      <script>
      var button = document.getElementById("a");
      button.click();
      </script>

@endif --}}


<script>

            var car_collection = document.querySelector('#car_collection')
            var car_collection_btn = document.querySelector('#car_collection_btn')

            car_collection_btn.onclick=function(){
      
              //document.location.assign('home?key=all');
               $.ajax({
               type:'POST',
               url:'/getAllImage',
               data:{_token : '<?php echo csrf_token() ?>'},
               success:function(data) {
                  console.log(data);
                  car_collection_btn.hide();
                  $("#msg").html(data.msg);
               }
            });
            }

            
        </script>
<script type="text/javascript">


        $('#abcd').owlCarousel({
            loop:true,
            margin:100,
            nav:false,
        autoplay:true,
        
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })    
        



        $('#abc').owlCarousel({
            loop:true,
            margin:100,
            nav:false,
        autoplay:false,
        
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:4
                }
            }
        })    
     
        
</script>
@endsection    

