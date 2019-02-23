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
      <form action="{{route('pcategory.update', $pcategory->id)}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         {{method_field('PATCH')}}

  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$pcategory->name}}" required>
  </div>

   <div class="form-group">
    <label for="name">Type</label>
     <select name="type" class="form-control">
       <option value="1" @if($pcategory->type == 1)selected @endif> Inbound</option>
       <option value="2" @if($pcategory->type == 2)selected @endif> Outbound</option>
     </select>
  </div>
 
    
  

<div class="text-center">
  <button type="submit" class="btn btn-primary">Submit</button> 
  <a href="" class="btn btn-danger">Cancel</a>
</div>

</form>
</div>
    </section>

  </div>
@endsection