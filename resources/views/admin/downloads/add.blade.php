
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
          <h3 class="card-title">       New Downloads    <a href="{{route('download.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>

          </h3>

        </div>
        <div class="card-body">
          <form action="{{route('download.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="title" placeholder="Enter Download Title" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" required>
              </div>
              <div class="form-group col-md-6">
                <label for="file">File</label>
                <div class="custom-file">
                    <input class="custom-file-input fileinput" id="file" name="file" type="file">
                    <label class="custom-file-label"  id="filelabel">Choose File</label>
                </div>
              </div>
            </div>








            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('download.index')}}" class="btn btn-danger">Cancel</a>


          </form>
        </div>
      </div>
    </section>

  </div>
   <script>
  $(document).ready(function(){
    $('.fileinput').change(function () {

                var value = $(this).val();


                $('#filelabel').text(value);
    });
  });
   

  </script>

@endsection

