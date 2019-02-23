
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
          <h3 class="card-title">New Quick Link    <a href="{{route('quicklinks.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>

          </h3>

        </div>
        <div class="card-body">
          <form action="{{route('quicklinks.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="title" placeholder="Enter Quick Link Title" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Link</label>
                <input type="text" class="form-control" id="description" name="link" placeholder="Enter link" required>
              
              </div>
            </div>








            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('quicklinks.index')}}" class="btn btn-danger">Cancel</a>


          </form>
        </div>
      </div>
    </section>

  </div>

@endsection

