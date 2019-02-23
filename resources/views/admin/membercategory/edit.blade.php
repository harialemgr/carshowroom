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
          <h3 class="card-title">Member Category  Edit   <a href="{{route('membercategory.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>

          </h3>

        </div>
        <div class="card-body">
        <form action="{{route('membercategory.update', $member_category->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{method_field('PATCH')}}

          <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="name" name="title" value="{{$member_category->title}}" required>
          </div>
          <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control" id="name" name="description" value="{{$member_category->description}}" required>
          </div>





          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('membercategory.index')}}" class="btn btn-danger">Cancel</a>
          </div>

        </form>
        </div>
      </div>
    </section>
  </div>
@endsection



