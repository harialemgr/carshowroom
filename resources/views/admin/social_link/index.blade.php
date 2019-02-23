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
                    <h3 class="card-title">Social Links   
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('social_links.update', $links->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name"><i class="fa fa-facebook-square"></i> Facebook</label>
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook Page Link" value="{{ $links->facebook }}" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name"><i class="fa fa-google-plus"></i> Google Plus</label>
                                <input type="text" class="form-control" name="google_plus" placeholder="Google Plus Link" value="{{ $links->google_plus }}" >
                            </div>                        
                            <div class="form-group col-md-12">
                                <label for="name"><i class="fa fa-twitter-square"></i> Twitter</label>
                                <input type="text" class="form-control " name="twitter" placeholder="Twitter Link" value="{{ $links->twitter }}" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name"><i class="fa fa-linkedin-square"></i> Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" placeholder="Linkedin Link" value="{{ $links->linkedin }}" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name"><i class="fa fa-instagram"></i> Instagram</label>
                                <input type="text" class="form-control" name="instagram" placeholder="Instagram  Link" value="{{ $links->instagram }}" >
                            </div>                                                                                
                        <button type="submit" class="btn btn-primary">Update</button>
    
                    </form>
                </div>
            </div>
        </section>

    </div>
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

















