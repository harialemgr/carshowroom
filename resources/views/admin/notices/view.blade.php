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
                <h3 class="card-title">Notices                <a href="{{ route('notice.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add notice </a>
                </h3>

            </div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="table-heading">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notices as $notice)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$notice->title}}</td>
                            <td>{{$notice->description}}</td>
                            {{-- <td>{{$notice->slug}}</td> --}}
                            <td><img src="{{asset('images/notice/'.$notice->images[0])}}" height=50 width=50></td>

                            <td >
                                <div class="pull-left">
                                    <a href="{{route('notice.edit', $notice->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
                                </div>

                                <div class="float-left" style="margin-left:40px;">
                                <form id="delete-item{{$notice->id}}"  action="{{route('notice.destroy',$notice->id)}}" style="Display:none"  method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                </form>
                                 <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$notice->id}}').submit();
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
</script>


@endsection