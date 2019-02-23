
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
                            <h3 class="card-title">Quick Links                           <a href="{{ route('quicklinks.create') }}" class="btn btn-primary pull-right" type=""><span class="glyphicon glyphicon-plus"></span> Add Quick Link </a>
                            </h3>

                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($quicklinks as $link)
                                    <tr>
                                        <td>{{$link->id}}</td>
                                        <td>{{$link->title}}</td>
                                        <td>{{$link->link}}</td>
                                        <td>
                                            <div class="pull-left">
                                                <a href="{{route('quicklinks.edit', $link->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
                                            </div>

                                            <div class="float-left" style="margin-left:40px;">
                                            <form id="delete-item{{$link->id}}"  action="{{route('quicklinks.destroy',$link->id)}}" style="Display:none"  method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}

                                            </form>
                                            <a href="" onclick="
                                            if (confirm('Are you sure, You want to delete this ?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-item{{$link->id}}').submit();
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
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
        </section>




    </div>

    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
@endsection






