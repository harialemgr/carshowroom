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
                <h3 class="card-title">All pricings                
                <a href="{{ route('pricing.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add pricing </a>
                </h3>

            </div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="table-heading">
                        <th>  Speed </th>
                        <th> Price </th>
                        <th> Plan </th>
                        <th> Traffic </th>
                        <th> Display Mode </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pricings as $pricing)
                        <tr>
                            <td>{{ $pricing->speed . ' ' . $pricing->unit }}</td>
                            <td>{{ $pricing->price }}</td> 
                            <td>{{ $pricing->plan_type }}</td>
                            <td>{{ $pricing->traffic }}</td>
                            <td>{{ $pricing->display == '1' ? 'Show' : 'Hide' }}</td>
                            <td >
                                <div class="pull-left">
                                    <a href="{{route('pricing.edit', $pricing->id)}}" class="btn btn-primary"><i class="fa fa-pencil "></i></a>
                                </div>

                                <div class="float-left" style="margin-left:40px;">
                                <form id="delete-item{{$pricing->id}}"  action="{{route('pricing.destroy',$pricing->id)}}" style="Display:none"  method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                </form>
                                 <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$pricing->id}}').submit();
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
    {{-- sweet alert 2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.4/sweetalert2.all.js"></script>
    <script>
        const toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
    </script>
    <script>
        @if(session('successMsg'))
            toast({ type: 'success', title: `{{ session('successMsg') }}` })
        @elseif(session('failedMsg'))
            toast({ type: 'success', title: `{{ session('failedMsg') }}` })
        @elseif(session('warningMsg'))
            toast({ type: 'success', title: `{{ session('warningMsg') }}` })
        @endif
    </script>

@endsection