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
                <h3 class="card-title">All Services              <a href="{{ route('ourservice.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add Services </a>
                </h3>

            </div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="table-heading">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Added on</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{  date('M j, Y', strtotime($service->created_at)) }}</td>
                            <td >
                                <div class="pull-left">
                                    <a href="{{route('ourservice.edit', $service->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
                                </div>

                                <div class="float-left" style="margin-left:40px;">
                                <form id="delete-item{{$service->id}}"  action="{{route('ourservice.destroy',$service->id)}}" style="Display:none"  method="post">
                                @csrf
                                @method('DELETE')
                                </form>
                                 <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$service->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="btn btn-danger">
                                <i class="fa fa-trash "></i>

                                </a>
                                 </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script>
    $(function () {
        $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    });

    @if(session('successMsg'))
        toast({ type: 'success' , title: `{{ session('successMsg') }}` });
    @elseif(session('successMsg'))
        toast({ type: 'warning' , title: `{{ session('failedMsg') }}` });
    @elseif(session('successMsg'))
        swal({ 
            type: 'warning', 
            title: 'Internal Error',
            text: `{{ session('warningMsg') }}` })
    @endif
</script>

@endsection