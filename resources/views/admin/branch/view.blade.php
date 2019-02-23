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
                <h3 class="card-title">Branches                <a href="{{ route('branch.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add Branch </a>
                </h3>

            </div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="table-heading">
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($branches as $branch)
                        <tr>
                            {{-- <td>{{$loop->index +1}}</td> --}}
                            <td>{{$branch->name}}</td>
                            <td>{!!$branch->address!!}</td>
                            <td>{!!$branch->email!!}</td>
                            <td>{!!$branch->contact!!}</td>
                            <td >
                                <div class="pull-left">
                                    <a href="{{route('branch.edit', $branch->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
                                </div>

                                <div class="float-left" style="margin-left:40px;">
                                <form id="delete-item{{$branch->id}}"  action="{{route('branch.destroy',$branch->id)}}" style="Display:none"  method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                </form>
                                 <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$branch->id}}').submit();
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
/**
    * flash messages if there is an actions
*/
    @if(session('successMsg'))
        toast({ type: 'success' , title: `{{ session('successMsg') }}` });
    @elseif(session('warningMsg'))
        swal({ 
            type: 'warning', 
            title: 'Internal Error',
            text: `{{ session('warningMsg') }}` })
    @endif
</script>
@endsection