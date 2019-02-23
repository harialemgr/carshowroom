
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
          <h3 class="card-title">       New Gallery Category    <a href="{{route('gallerycategory.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>

          </h3>

        </div>
        <div class="card-body">
          <form action="{{route('gallerycategory.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Gallery Category Title" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Gallery Category Description" required>
              </div>
            </div>







            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('gallerycategory.index')}}" class="btn btn-danger">Cancel</a>


          </form>
        </div>
      </div>
    </section>

  </div>

@endsection

