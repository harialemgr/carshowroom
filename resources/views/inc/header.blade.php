@section('header')

<style>
#flex-item1{
    
    margin-left: 10px;
    margin-right: 10px;
    font-size:12px;
    text-align: right;
    color: white;
    padding-top: 10px;
    padding-bottom: 7px;
    text-transform:uppercase;
}

</style>
<div class="flex-container1">

  <span id="flex-item1">

   speed and shine autozone pvt.ltd. 
 
  </span>
  <span class="flex-item2" id="text1">
    &nbsp;{{$footer->phno}}   
  
  </span>

</div>
@endsection