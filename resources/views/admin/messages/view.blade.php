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
                            <h3 class="card-title">Message </a>
                            </h3>

                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="table-heading">

                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                         @foreach($messages as $message)
                             <tr>
                                 <td>{{ date('j M, Y', strtotime($message->created_at)) }} | {{ $message->created_at->diffForHumans() }}</td>
                                 <td>{{$message->name}}</td>
                                 <td>{{$message->email}}</td>
                                 <td>{{$message->phone}}</td>
                                 {{-- <td>{!!substr($message->message,0,70)!!}{{strlen($message->message)>70?"....":""}}</td> --}}
                                 <td width="10%">
                                     <div class="pull-left">
                                         <a href="#" data-toggle="modal" data-target="#{{$message->id}}" ><i style="color:green; margin-right: 20px;" class="fa fa-eye"></i></a>
                                     </div>
                             
                             <form id="delete-item{{$message->id}}"  action="{{route('customerquery.destroy',$message->id)}}" style="Display:none"  method="post">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="" onclick="
                                    if (confirm('Are you sure, You want to delete this ?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-item{{$message->id}}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }

                                    ">

                                <i class="fa fa-fw fa-trash" style="color:red;"></i></a>
                        
                 </td>

                </tr>


<!-- modal start -->
<div class="modal fade" id="{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Feedback / Query by : <i>{{$message->name}}</i></h5><br/>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Email : </strong><i class="modal-title" id="exampleModalLongTitle"><i>{{$message->email}} </i></i><br />
         <strong>Phone : </strong><i class="modal-title" id="exampleModalLongTitle"><i>{{$message->phone}}</i></i><br />
        <strong>Message : </strong><p><i>{{$message->message}}</i></p>
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