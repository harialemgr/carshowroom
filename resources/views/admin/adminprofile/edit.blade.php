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
                <h3 class="card-title">Upadate Profile  </h3>

            </div>
            <div class="card-body">
      <form action="/adminprofile/{{$adminprofile->id}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('PATCH')

                  <div class="form-group col-md-6">
                      <label for="status">Enter status</label>
                      <input name="status" type="text" value="{{$adminprofile->status}}"" class="form-control" id="status">
                      @if($errors->has('status'))
                        <span style="color:red">{{ $errors->first('status') }} </span>
                     @endif
                  </div>
                  <div class="form-group col-md-6">
                      <label for="phno">Enter Phone Number on status</label>
                      <input name="phno" type="text" value="{{$adminprofile->phno}}" class="form-control" id="phno">
                      @if($errors->has('phno'))
                        <span style="color:red">{{ $errors->first('phno') }} </span>
                     @endif
                  </div>



          <div class="form-group col-md-6">
              <label>Logo</label>
              
              <div class="input-group">
    
                  <div class="custom-file">
                      <input class="custom-file-input imagechk" id="image" name="logo" value="{{$adminprofile->logo}}" type="file">
                      <label class="custom-file-label" for="exampleInputFile" id="imageink">New Logo</label>
                  </div>
              </div>
          </div>


          
          <div class="form-group col-md-6">
              <label>pop up picture</label>
              
              <div class="input-group">
    
                  <div class="custom-file">
                      <input class="custom-file-input imagechk1" name="popup" value="{{$adminprofile->popup}}" type="file">
                      <label class="custom-file-label" for="exampleInputFile" id="imageink1">New popup picture</label>
                  </div>
              </div>
          </div>

          <div class="form-group">
          <label for="">Current Logo</label><br>
          @if ("{{asset('/storage/logo/'.$adminprofile->logo }})")
                     <img src="{{ asset('/storage/logo/'.$adminprofile->logo) }}" height="50px">
              @else
            <p>No image found</p>
                 @endif

          </div>
          <div class="form-group">
          <label for="">Current pop up picture</label><br>
          @if ("{{asset('/storage/logo/'.$adminprofile->popup }})")
                     <img src="{{ asset('/storage/logo/'.$adminprofile->popup) }}" height="50px">
              @else
            <p>No image found</p>
                 @endif

          </div>
          
                  <div id="image-content" hidden>
                      <img id="blah" src="#" alt="your image" class="img-responsive" width="250" height="200" />
                  </div>


                  <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Update</button>



              </form>

              
              <br>
<br>

<!-- 
              
          <form id="delete-item{{$adminprofile->id}}"  action="{{route('adminprofile.destroy',$adminprofile->id)}}" style="Display:none"  method="post">
                            {{csrf_field()}}  
                            {{method_field('DELETE')}}

                        </form>
                        <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$adminprofile->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="btn btn-danger">
                                Delete

                            </a> -->

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
$('.imagechk1').change(function () {

var value = $(this).val();


$('#imageink1').text(value);
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.4/sweetalert2.all.js"></script>
    <script>
        const toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
    </script>
    <script>
        @if(session('successMsg'))
            toast({ type: 'success', title: `{{ session('successMsg') }}` })
        @elseif(session('failedMsg'))
            toast({ type: 'success', title: `{{ session('failedMsg') }}` })
        @elseif(session('warningMsg'))
            toast({ type: 'success', title: `{{ session('warningMsg') }}` })
        @endif
    </script>

@endsection

