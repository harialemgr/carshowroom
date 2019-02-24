@extends('frontend.master', ['category_id' => $category_id])
@include('layouts.meta')
@section('main-content')

<div class="clearfix" id="firstpic">
</div>


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

<div class="container-fluid" style="background-color: #E2821E;">
        <div class="row">
                <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="abc">
                                @foreach($testimonials as $testimonial)
                                        <div class="item"> 
                                          <img src="{{ asset('images/slide/car1.jpg')}}" height="200px"></img>
                                              
                                                <h3>Model No:{{ $testimonial->name}}</h3>
                                                <p>Datails :{{ $testimonial->description }}</p>
                                        </div>
                                            <div class="item" > 
                                          
                                          <img src="{{ asset('images/slide/car2.jpg')}}" height="200px"></img>
                                               <h3>Model No.{{ $testimonial->name}}</h3>
                                              <p>Datails:{{ $testimonial->description }}</p>
                                               
                                        </div>
                                      
                                          <div class="item"> 
                                          
                                          <img src="{{ asset('images/slide/car3.jpg')}}" height="200px"></img>
                                                <h3>Model No.{{ $testimonial->name}}</h3>
                                              <p>Details:{{ $testimonial->description }}</p>
                                              
                                        </div>
                                      
                                      
                                @endforeach
                        </div> 
                </div>      

        </div>

</div>

<div class="container-fluid" style="background-color: #E2821E;">
        <div class="row">
                <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="abcd">
                                @foreach($testimonials as $testimonial)
                                        <div class="item"> 
                                          <img src="{{ asset('images/slide/car1.jpg')}}" height="200px"></img>
                                              
                                                <h3>Model No:{{ $testimonial->name}}</h3>
                                                <p>Datails :{{ $testimonial->description }}</p>
                                        </div>
                                            <div class="item" > 
                                          
                                          <img src="{{ asset('images/slide/car2.jpg')}}" height="200px"></img>
                                               <h3>Model No.{{ $testimonial->name}}</h3>
                                              <p>Datails:{{ $testimonial->description }}</p>
                                               
                                        </div>
                                      
                                          <div class="item"> 
                                          
                                          <img src="{{ asset('images/slide/car3.jpg')}}" height="200px"></img>
                                                <h3>Model No.{{ $testimonial->name}}</h3>
                                              <p>Details:{{ $testimonial->description }}</p>
                                              
                                        </div>
                                      
                                      
                                @endforeach
                        </div> 
                </div>      

        </div>

</div>
<div id="secondpic">
</div>


<div class="w3-container">
  <!-- Button to Open the Modal -->
        <span id="a" data-toggle="modal" data-target="#myModal">
        </span>
        <!-- The Modal -->
        <div class="modal" id="myModal">
                <div class="modal-dialog">
                        <div class="modal-content">
            
                        <!-- Modal Header -->
                           <div class="modal-header">
               
                                <button type="button" class="close" data-dismiss="modal">&times;					        </button>
                        </div> 
              
              <!-- Modal body -->
              <div class="modal-body">
                     <img src="{{ asset('/storage/logo/'.$adminprofile->popup)}}" class="w3-image" alt="popup images">
                </div>
              
              
              <!-- Modal footer -->
                 <div class="modal-footer">
               
                </div>
                </div>
            </div>
        </div>
</div>
        
<style>
.modal-body{
     
}
.image{


}
</style>
  @if(!isset($_SERVER['HTTP_REFERER']))
      <script>
      var button = document.getElementById("a");
      button.click();
      </script>

@endif


<script>
            var btnclick = document.querySelector('#btn2')
            btnclick.onclick=function(){
                document.location.assign('/contact')
            }
        </script>
<script type="text/javascript">


        $('#abcd').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
        autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        })    
        



        $('#abc').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
        autoplay:true,
        navContainer:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        })    
        

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
        autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })       
</script>
@endsection    

