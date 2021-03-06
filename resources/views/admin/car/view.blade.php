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
                <h3 class="card-title">
                              <a href="{{route('car.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp; Add</a>    
                              <span style="padding-left:30%;font-size:big ">Car Collection</span>
                              <a href="{{route('car.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
  
                </h3>

            </div>
            <div class="card-body">

            <div class="row">
            @foreach($cars as $car)
                <div class="card column" style="width:200px">
                        <div style="height:150px;padding:0;">
                       <img class="card-img-top" src="{{asset('storage/car/'.$car->image)}}" alt="Card image" style="width:100%">
                       </div>
                    <div class="card-body" style="padding:2px;">
                        <div class="row">
                        <h4 class="card-title column">{{$car->name}}</h4> <a href="{{route('car.edit',$car->id)}}" class="column" title="edit"><i class="fas fa-edit"></i></a>
                        
                         <form id="delete-item{{$car->id}}"  action="{{route('car.destroy',$car->id)}}" style="display:none"  method="post">
                            {{csrf_field()}}  
                            {{method_field('DELETE')}}

                        </form>
                         <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$car->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="column">
                                <i class="fas fa-trash"></i>

                            </a>


                           </div>
                       
                       <p class="card-text">{{$car->description}}</p>
                      
                     </div>
                  </div>
            @endforeach
            </div>

          </div>
        </div>
    </section>
  </div>

@endsection

