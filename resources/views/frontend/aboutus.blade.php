@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')


@foreach ($abouts as $about)
    {{-- <div class="container-fluid abc">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h3 class="heading1"><span class="hd"></span></h3>
    </div>
  </div>
</div> --}}
<div class="container-fluid" style="padding: 20px 30px 0px 30px; text-align: justify;">
{{-- <div class="container-fluid about" style="padding: 20px 30px 0px 30px;"> --}}
  <div class="row">
    <div class="col-md-12">
    {{-- <div class="col-md-8"> --}}
      <h2 class="hd" style=" color:#E2821E">{{ $about->title }}</h2>
      {{-- <p style="text-align: justify;">{!! str_replace(array('<p>','</p>'), '',$about->summary) !!}</p> --}}
      <p style="text-align: justify; color: #8a8989;">{!! $about->summary !!}</p>
      <br>
</div>
@if((string)$about->image[0] == 'noimage.jpg')
      <div class="col-md-4">
        <img src="{{asset('images/page/'.$about->images[0])}}" class="img-fluid" cursor="pointer">
      </div>
      {{-- {{ $about->images[0] }} --}}
@endif      
    </div>
    
  </div>

@endforeach


{{-- start --}}
  
{{-- 
<div class="container-fluid abc">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h3 class="heading1">WHO <span class="hd">WE ARE</span></h3>
    </div>
  <div class="col-md-10 offset-md-1">
    <h3 class="hd">THE LARGEST INTERNET SERVICE PROVIDER</h3>
  </div>
  </div>
</div>
<div class="container-fluid about">
  <div class="row">
    <div class="col-md-8">
      <h2 class="hd">We are the second largest Internet Service Provider and the leader in the telecommunications market.</h2>
      <p>We're committed to making Internet simple for all clients to connect across both our own network and the National Network. Our vision is to lead the market with services that harness the potential of the Internet and then differentiate with award-winning customer service. We employ more than 2,500 enthusiastic staff members across three countries. 80 per cent of them are employed directly to service nearly one million customers. We maintain our own broadband network and support over 1.8 million services nationwide. Internet Provider has a proud history of delivering awesome customer service, which has won us dozens of awards!</p>
      <br>
</div>
      <div class="col-md-4">
        <img src="assets/img1.jpg" class="img-fluid" cursor="pointer">
      </div>
    </div>
  </div> --}}
  {{-- end --}}


<!-- <div class="parallex">
  <div class="col-md-10 offset-md-1">
    <h3 class="hd1">your personal speed &</h3>
  </div>
  <div class="col-md-10 offset-md-1">
    <h3 class="hd2">quality home connection</h3>
  </div>
  <div class="col-md-10 offset-md-1">
    <button type="button" class="btnreadmore"><span>READ MORE</span></button>
  </div>
</div> -->


<!-- <Team section -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="team">meet our team</div>
    </div>
  </div>
</div>

<div class="container ">
    <div class="row">
    @foreach ($members as $member)
        <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="{{asset('images/member/'.$member->images[0])}}" height="250px" width="200px">
          <div class="card-body" style="line-height: 0; text-align: center; padding: 0px 0px 0px 0px;">
            <h4>{{ $member->name }}</h4>
            <p>{{ $member->designation }}</p>
          </div>
        </div>
      </div>
    @endforeach

      {{-- <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="assets/bishal.jpg" height="300px" width="200px">
          <div class="card-body">
            <h5 class="card-title">Bishal Gaire</h5>
            <p class="card-text">Bishal is the begineer of web page designing. He is doing his best.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="assets/hariale.jpg" height="300px" width="200px">
          <div class="card-body">
            <h5 class="card-title">Er. Hari</h5>
            <p class="card-text">Hari is the begineer of web page designing. He is doing his best.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="assets/prakash.jpg" height="300px" width="200px" >
          <div class="card-body">
            <h5 class="card-title">Er. Prakash</h5>
            <p class="card-text">Prakash is professional web page designeer also guide teacher. </p>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  
  <!-- our services -->
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

  </div>
</div>
</div>
@endsection