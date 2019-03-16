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
                <h3 class="card-title">Footer<a href="{{route('dashboard')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                </h3>

            </div>
            <div class="card-body">
      <form action="{{route('footersetting.store')}}" method="post"  enctype="multipart/form-data">
         {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="address">Address</label>
                      <input name="address" type="text" class="form-control" id="address" required>
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="phno">Phone Number</label>
                      <input name="phno" type="text" class="form-control" id="phno" required>
                     
                  </div>
                  </div>

                    <div class="row">
                  <div class="form-group col-md-6">
                      <label for="googlemap">Google Map Link</label>
                      <input name="googlemap" type="text" class="form-control" required>
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="instagram">Instagram</label>
                      <input name="instagram" type="text" class="form-control" required>
                     
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label for="facebook">Facebook</label></label>
                      <input name="facebook" type="text" class="form-control" required>
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="gamil">Gmail</label>
                      <input name="gmail" type="text" class="form-control" required>
                     
                  </div>
                  </div>
                  <div class="row">  
                  <div class="form-group col-md-6">
                      <label for="linkin">LinkIn</label>
                      <input name="linkin" type="text" class="form-control" required>
                     
                  </div>
                  <div class="form-group col-md-6">
                      <label for="twitter">Twitter</label>
                      <input name="twitter" type="text" class="form-control" required>
                     
                  </div>
                  </div>
                  <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update</button>
              </form>


          </div>
        </div>
    </section>
  </div>





  

  <script>
$(document).ready(function() {
    


    function readURL(input) {
 $('#image-content').show("slow");
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

});

$('.imagechk').change(function () {

    var value = $(this).val();


    $('#imageink').text(value);
});

</script>
@endsection

