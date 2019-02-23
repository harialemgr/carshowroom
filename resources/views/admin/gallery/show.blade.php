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
                <h3 class="card-title">{{$gallery_category->title}}             <a href="{{route('gallery.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                </h3>

            </div>
            <div class="card-body">
            <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4">
                    <div class="card">
						<img src="{{asset('images/gallery/'.$gallery->image)}}" class="card-img-top" height="300px" width="300px">
                    <div class="card-body text-center">
                        <form id="delete-item{{$gallery->id}}"  action="{{route('gallery.destroy',$gallery->id)}}" style="Display:none"  method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                </form>
                                 <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$gallery->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="btn btn-danger">
                                <i class="fa fa-trash text-center "></i>

                                </a>
                                 </div>
                    </div>
                </div>

            @endforeach

            @foreach ($videos as $video)
                    <div class="card">
						{!!$video->video_frame!!}
                    <div class="card-body text-center">
                        <form id="delete-item{{$video->id}}"  action="{{route('videos.destroy',$video->id)}}" style="Display:none"  method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                </form>
                                 <a href="" onclick="
                                if (confirm('Are you sure, You want to delete this ?'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-item{{$video->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }

                                " class="btn btn-danger">
                                <i class="fa fa-trash text-center "></i>

                                </a>
                                 </div>
                    </div>
                

            @endforeach



            
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