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
                            <h3 class="card-title">Package                                             <a href="{{ route('package.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add Package </a>
                            </h3>

                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="table-heading">
                                    <th>Id</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Group Size</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($packages as $pakcage)
                                    <tr>
                                        <td>{{$loop->index +1}}</td>
                                        <td>@if($pakcage->type == 1) Inbound @else Outbound @endif</td>
                                        <td>{{$pakcage->category}}</td>
                                        <td>{{$pakcage->name}}</td>
                                        <td>{{$pakcage->duration}}</td>
                                        <td>{{$pakcage->amount}}</td>
                                        <td>{{$pakcage->group_size}}</td>

                                        <td >
                                            <div class="pull-left">
                                                <a href="{{route('package.edit', $pakcage->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
                                            </div>

                                            {{--<div class="float-left" style="margin-left:40px;">--}}
                                            {{--<form id="delete-item{{$category->id}}"  action="{{route('pageCategory.destroy',$category->id)}}" style="Display:none"  method="post">--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--{{method_field('DELETE')}}--}}

                                            {{--</form>--}}
                                            {{--<a href="" onclick="--}}
                                            {{--if (confirm('Are you sure, You want to delete this ?'))--}}
                                            {{--{--}}
                                            {{--event.preventDefault();--}}
                                            {{--document.getElementById('delete-item{{$category->id}}').submit();--}}
                                            {{--}--}}
                                            {{--else{--}}
                                            {{--event.preventDefault();--}}
                                            {{--}--}}

                                            {{--" class="btn btn-danger">--}}
                                            {{--<i class="fa fa-trash "></i>--}}

                                            {{--</a>--}}
                                            {{--</div>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

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