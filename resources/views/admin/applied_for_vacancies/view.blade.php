@extends('layouts.master')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.sidebar')
@include('layouts.meta')
@section('main-content')




    <div class="content-wrapper">

        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Applide For Vacancies </a>
                            </h3>

                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="table-heading">

                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Applied for</th>
                                    <th>Applied on</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                         @foreach($applied_for_vacancies as $applied_for_vacancy)
                             <tr>
                                 <td>{{ $applied_for_vacancy->name }}</td>
                                 <td>{{$applied_for_vacancy->address}}</td>
                                 <td>{{$applied_for_vacancy->applied_post}}</td>
                                 <td>{{ date('M j, Y' , strtotime($applied_for_vacancy->created_at)) }}</td>
                                 {{-- <td>{!!substr($message->message,0,70)!!}{{strlen($message->message)>70?"....":""}}</td> --}}
                                 <td width="10%">
                                     <div class="pull-left">
                                         <a href="#" data-toggle="modal" data-target="#{{$applied_for_vacancy->id}}" ><i style="color:green; margin-right: 20px;" class="fa fa-eye"></i></a>
                                     </div>
                             
                             <form id="delete-item{{$applied_for_vacancy->id}}"  action="{{route('appliedvacancy.destroy',$applied_for_vacancy->id)}}" style="Display:none"  method="post">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="" onclick="
                                    if (confirm('Are you sure, You want to delete this ?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-item{{$applied_for_vacancy->id}}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }

                                    ">

                                <i class="fa fa-fw fa-trash" style="color:red;"></i></a>
                        
                 </td>

                </tr>


<!-- modal start -->
<div class="modal fade" id="{{$applied_for_vacancy->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Name : <i>{{$applied_for_vacancy->name}}</i></h5><br/>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Address : </strong><i class="modal-title" id="exampleModalLongTitle"><i>{{$applied_for_vacancy->address}} </i></i><br />
         <strong>Phone : </strong><i class="modal-title" id="exampleModalLongTitle"><i>{{$applied_for_vacancy->contact}}</i></i><br />
        <strong>Applied Post : </strong><p><i>{{$applied_for_vacancy->applied_post}}</i></p>
        <strong><a href="applied-for-vacancies/download/{{$applied_for_vacancy->curriculum_vitae}}">Download CV</a></strong>
      </div>
     </div>
  </div>
</div>

<!-- modal end -->

      @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

  <!-- Button trigger modal -->
<!-- Modal -->
@endsection

@section('scripts')
    <script>
    @if(session('successMsg'))
        toast({ type: 'success' , title: `{{ session('successMsg') }}` });
    @elseif(session('failedMsg'))
        toast({ type: 'warning' , title: `{{ session('failedMsg') }}` });        
    @elseif(session('warningMsg'))
        swal({ 
            type: 'warning', 
            title: 'Internal Error',
            text: `{{ session('warningMsg') }}` })
    @endif
    </script>
@endsection