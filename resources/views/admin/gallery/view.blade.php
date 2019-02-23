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
                <h3 class="card-title">Gallery    <a href="{{ route('videos.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px; margin-left:10px;"><span class="glyphicon glyphicon-plus"></span> Add Video </a>           <a href="{{ route('gallery.create') }}" class="btn btn-primary" type="" style="float:right; margin-bottom: 10px;"><span class="glyphicon glyphicon-plus"></span> Add Image </a>
                </h3>

            </div>
            <div class="card-body">
            <div class="row">
                @foreach ($gallery_categories as $category)
                <div class="col-md-3">
                    <a href="{{route('gallerycategory.show',$category->id)}}"><i class="fa fa-folder gallery-folder card-img-top" style="font-size: 50px;"></i>
                        {{$category->title}}  
                    </a>
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