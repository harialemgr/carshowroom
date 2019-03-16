@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')

<div class="container-fluid" style="background-color: white;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>BLOGS</h1>
        </div>
    </div>
    <div class="row">
    @foreach ($blogs as $blog)
        <div class="col-md-6">
            <div class="card">
                {{-- <img src="{{asset('assets/images/picture.jpg')}}" class="card-img-top"> --}}
                {{-- <img src="{{asset('images/blog/'.$blog->images[0])}}" class="card-img-top"> --}}
                @if ($blog->images[0] == 'noimage.jpg')
                    <img src="https://bit.ly/2GDaN1I" class="card-img-top">
                @else
                    <img src="{{asset('images/blog/'.$blog->images[0])}}" class="card-img-top">
                @endif
                <div class="card-body">
                    <a style="text-decoration:none; color: #E2821E; font-size: 20px;" href="/blogs/{{ $blog->slug }}" >{{ $blog->title }}</a>
                    <p class="">{{  strip_tags(substr($blog->summary, 0 , 200)) }}...... <a href="/blogs/{{ $blog->slug }}"><small><u style="color: blue;">Read More</u></small></a> </p>
                </div>
            </div>
        </div> 
        <div class="clearfix"></div>   
    @endforeach

         {{-- <div class="col-md-6">
            <div class="card">
                <img src="{{asset('assets/images/picture.jpg')}}" class="card-img-top">
                <div class="card-body">
                     <a style="text-decoration:none;" href="{{route('blogview')}}" ><p class="card-title">Prakash Sharma</p></a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.sdfsdf s spodkfj;lsdjf sdf;ljksd;lkfsdl; sdf;lkdlfks;dfjpiisjdfk sjdkfjsklsdjflskdjfpsdj</p>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card">
                <img src="{{asset('assets/images/picture.jpg')}}" class="card-img-top">
                <div class="card-body">
                     <a style="text-decoration:none;" href="{{route('blogview')}}" ><p class="card-title">Prakash Sharma</p></a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.sdfsdf s spodkfj;lsdjf sdf;ljksd;lkfsdl; sdf;lkdlfks;dfjpiisjdfk sjdkfjsklsdjflskdjfpsdj</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection