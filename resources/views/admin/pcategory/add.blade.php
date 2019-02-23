@extends('layouts.master')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.sidebar')
@include('layouts.meta')
@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Package Category
      </h1>

    </section>

    <section class="content">
      <div class="form-container form-color" >
      <form action="{{route('pcategory.store')}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}

        <div class="row">
          <div class="form-group col-md-6">
            <label for="name">Package Category Type</label>
            <select class="form-control" name="type"required>
              <option value="1">Inbound</option>
              <option value="2">Outbound</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Package Category" required>
          </div>
        </div>


 
    
  



  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('back')}}" class="btn btn-danger">Cancel</a>


</form>
</div>
    </section>

  </div>
@endsection