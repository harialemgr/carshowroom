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
                    <h3 class="card-title">Add New Services Description                                            <a href="{{route('ourservice.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> &nbsp; All Services</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('ourservice.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Title</label>
                                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Enter Title" value="{{ old('title') }}" >
                                @if($errors->has('title'))
                                   <span class="invalid-input">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">

                            <div class="card-body">
                                <label for="name">Description</label>
                                <div class="mb-3">
                                    <textarea id="editor1" name="description" class="{{ $errors->has('description') ? 'is-invalid' : '' }}" style="width: 100%">{{ old('description') }}</textarea>
                                    @if($errors->has('title'))
                                        <span class="invalid-input">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{route('blog.index')}}" class="btn btn-danger">Cancel</a>


                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection


@section('scripts')
<script>
        $(function () {

            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .then(function (editor) {
                    // The editor instance
                })
                .catch(function (error) {
                    console.error(error)
                })

            // bootstrap WYSIHTML5 - text editor

        });
        @if(session('warningMsg'))
            swal({ 
                type: 'warning', 
                title: 'Internal Error !',
                text: `{{ session('warningMsg') }}`,
                })
        @endif
</script>

@endsection
















