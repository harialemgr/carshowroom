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
                <h3 class="card-title">Add Wallpapers<a href="{{route('wallpaper.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                </h3>

            </div>
            <div class="card-body">
      <form action="{{route('wallpaper.update',$wallpaper->id)}}" method="post"  enctype="multipart/form-data">
         @csrf
        @method('PATCH')
                  <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input name="name" type="text" placeholder="Enter Name" class="form-control" value="{{$wallpaper->name}}" id="status">
                     
                  </div>
    
         
{{--  <div class="form-group col-md-6">
              <label>wallpaper</label>
              <div class="input-group">
                  <div class="custom-file">
                      <input class="custom-file-input imagechk" id="image" name="image" value="" type="file">
                      <label class="custom-file-label" for="exampleInputFile" id="imageink">Choose Image</label>
                  </div>
              </div>
          </div>
              <label>Current wallpaper</label>
                  <br><img src="{{asset('storage/wallpaper/'.$wallpaper->image)}}" height="100px">
                  <br>
                 

                  <div id="image-content" hidden>
                      <img id="blah" src="#" alt="your image" class="img-responsive" width="250" height="200" />
                  </div> --}}


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

