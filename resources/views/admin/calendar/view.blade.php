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
                    <h3 class="card-title">Calendar                <a href="{{ route('calendars.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add Calendar </a>
                    </h3>

                </div>
                <div class="card-body">

    @foreach($calendars as $calendar)
  <div class="col-md-4" style="float: left;">
   <div class="card">
    <div style="width:auto; height: 300px; overflow:hidden;">
               <img class=" img-rounded"  src="{{asset('/images/calendar/'.$calendar->image)}}"  width="100%" >
                   </div>
                       <div class="card-body">
                       {{-- <h5>{{$calendar->title}}</h5> --}}
                        <form id="delete-item{{$calendar->id}}"  action="{{route('calendars.destroy',$calendar->id)}}" style="Display:none"  method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                        </form>
                        <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$calendar->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="btn btn-danger">
                                Delete

                            </a>
                           {{-- @if($calendar->publish == 1) <i class="fa fa-check-circle pull-right"></i>@endif --}}
                       </div>
   </div>
  </div>




     @endforeach

                </div>
            </div>
        </section>
    </div>


@endsection