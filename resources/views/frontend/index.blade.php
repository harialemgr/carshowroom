@extends('frontend.master', ['category_id' => $category_id])
@include('layouts.meta')
@section('main-content')

<div class="clearfix">
              
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                @foreach ($slider_images as $slider_image)
                        <div class="carousel-item {{ $loop->index + 1 == '1' ? 'active' : ''}}">
                                <img class="d-block w-100 slidepic" src="{{ asset('/images/slide/' .  $slider_image->image) }}" alt="First slide">
                                <div class="row carousel-caption">
                                     
                                        
                                        
                                </div>
                            
                        </div>     
                @endforeach
        
        </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
        </div>

</div>



<div class="container-fluid" style="background-color:white !important;">
        
        <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-8">
                        <h1 id="heading2">CHOOSE <span id="hd">YOUR PLAN</span></h1>
                </div>
                <div class="col-sm-4">
                </div>
        </div>
</div>


<div class="flexbox-container">
@php $a=1 @endphp
@foreach ($pricings as $pricing)

     <div class="flexbox-item">
                        <div class="row1 p-2" style="color:white;">{{ $pricing->traffic }} <span class="dot">A</span></div>
                        <div class="row2 p-2"><strong>{{ $pricing->speed }}</strong></strong> {{ $pricing->unit }}</div>
                        <div class="row3 p-2">Price: <b style="font-size:45px;">NRs.{{ $pricing->price }}</b><span style="font-size:20px;color:#E2821E">/{{ $pricing->plan_type }}</div>
                        <div class="row4 p-2">Traffic:<span style="color:#E2821E;"> {{ $pricing->traffic }}</span></div>
                        <div class="row5 p-2">
                        <form action="{{route('contact')}}">        
                        <button type="submit" class="btn1">CONTACT NOW
                                {{-- <i class="material-icons" style="color:blue;font-size:20px;position:absolute;">arrow_forward</i> --}}
                        </button>
                        </form>
                        </div>                
        
        </div>
        @php $a = $a+1 @endphp
        
@endforeach
       

</div>



<div class="container-fluid" id="internetservices">
        <div class="row" id="list3">
                <div class="col-sm-12">
                                {{-- <img src="assets/images/parallax.jpg" class="w3-round" alt="Norway"> --}}
                                <div id="head1">RELIABLE AND FAST</div>
                                <div id="head2"> INTERNET SERVICES</div>
                                <div id="head3"><form action="{{route('readmore')}}"><button type="submit" class="btnreadmore"><span>READ MORE</span></button></form></div>
                </div>
        </div>
</div>


<div class="container-fluid" style="background-color:white;margin-top:100px;margin-bottom:100px;">
        <div class="row" style="text-align:center;">
                <div class="col-sm-12" style="margin-bottom:80px;">
                        <h1>A RANGE OF ADVANTAGES</h1>
                       <h1 style="color:#E2821E"> AT AN AFFORDABLE PRICE</h1>
                </div>
        </div>
        <div class="row">
                <div class="col-sm-4">
                        <ul  style="list-style-type:none; text-align:center;">
                                <li style="color:#E2821E;font-size:80px;"><i class="fas fa-cog"></i></li>
                                <li><h3 style="color:#E2821E;">Equipment installation and setup</h3></li>
                                <li><p>Internet Provider delivers huge value and super-fast broadband over our fibre to the node network. We also include Netphone with every plan.</p></li>
                        </ul>
                </div>

                <div class="col-sm-4">
                        <ul  style="list-style-type:none;text-align:center;">
                                <li style="color:#E2821E;font-size:80px;"><i class="fas fa-headset"></i></li>
                                <li><h3 style="color:#E2821E;">Customer support centre</h3></li>
                                <li><p>We provide our clients with free 24/7 support that guarantees the solution of any issues with your connection or cloud hosting.</p></li>
                        </ul>
                </div>
                <div class="col-sm-4">
                        <ul  style="list-style-type:none;text-align:center;">
                                <li style="color:#E2821E;font-size:80px;"><i class="far fa-thumbs-up"></i></li>
                                <li><h3 style="color:#E2821E">Customer satisfaction guarantee</h3></li>
                                <li><p>The amount of our company’s satisfied customers grows with every new client creating satisfaction guarantee for everyone who uses our services.</p></li>
                        </ul>
                </div>
        </div>
</div>

<div class="container-fluid" style="background-color: #E2821E;">
        <div class="row">
                <div class="col-sm-12">
                        <div class="owl-carousel owl-theme">
                                @foreach($testimonials as $testimonial)
                                <div class="item"> 
                                        <h1><span id="what">What</span> <span id="say"> people say</span></h1> 
                                        <i class="fas fa-quote-right quote" style="color:#E2821E;background-color:white;"></i>     
                                        <p>{{ $testimonial->description }}</p>
                                        <h3>{{ $testimonial->name}}</h3>
                                </div>
                                @endforeach
                           


                        </div> 
                </div>      

        </div>

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
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
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

