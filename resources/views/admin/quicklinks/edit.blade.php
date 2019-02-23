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
          <h3 class="card-title">Quick Link  Edit   <a href="{{route('quicklinks.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>

          </h3>

        </div>
        <div class="card-body">
        <form action="{{route('quicklinks.update', $link->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{method_field('PATCH')}}

          <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="name" name="title" value="{{$link->title}}" required>
          </div>
          <div class="form-group">
            <label for="name">Link</label>
            <input type="text" class="form-control" id="name" name="link" value="{{$link->link}}" required>
          </div>





          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('quicklinks.index')}}" class="btn btn-danger">Cancel</a>
          </div>

        </form>
        </div>
      </div>
    </section>
  </div>
@endsection



