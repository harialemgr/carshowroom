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
          <h3 class="card-title">Downloads  Edit   <a href="{{route('download.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>

          </h3>

        </div>
        <div class="card-body">
        <form action="{{route('download.update', $download->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{method_field('PATCH')}}

          <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$download->title}}" required>
          </div>
          <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control" id="name" name="description" value="{{$download->description}}" required>
          </div>
          <div class="form-group col-md-6">
          <label for="file">File</label>
          <input type="hidden" name="originalname" value="{{$download->file}}">
            <div class="custom-file">
              <input class="custom-file-input fileinput" id="file" name="file" value="{{$download->file}}" type="file">
              <label class="custom-file-label"  id="filelabel">{{$download->file}}</label>
            </div>
          </div>





          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('download.index')}}" class="btn btn-danger">Cancel</a>
          </div>

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



