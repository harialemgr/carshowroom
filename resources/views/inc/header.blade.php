@section('header')

@php $adminprofile = App\Http\Controllers\HomeController::getGeneralSetting() @endphp

    


<div class="flex-container1">

  <span class="flex-item1" id="text">

  {{$adminprofile->status}}   
  
  <!-- 7 DAYS A WEEK FROM 8:00 AM TO 9:00 AM -->
  </span>
  <span class="flex-item2" id="text1">
      <i class="fa fa-phone fa-flip-horizontal" style="color:#0074B1;"></i>&nbsp;  {{$adminprofile->phno}}   
  
  </span>

</div>
@endsection