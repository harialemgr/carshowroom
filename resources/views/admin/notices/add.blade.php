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
                    <h3 class="card-title">New Notice                                            <a href="{{route('notice.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('notice.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            {{--<div class="form-group col-md-6">
                                <label for="name">Notice Category</label>
                                <select class="form-control" name="category" required>
                                    @foreach($notice_categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            --}}
                            <div class="form-group col-md-6">
                                <label for="name">Notice Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Notice's Title" required>

                            </div>
                        </div>
                        <div class="row">

                            <div class="card-body">
                                <label for="name">Notice Description</label>
                                <div class="mb-3">
                                    <textarea id="editor1" name="description" style="width: 100%"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6" id="appendimage">
                                <label>Notice Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input imagechk" id="image" name="image[]" value="" type="file">
                                        <label class="custom-file-label" for="exampleInputFile" id="imageink">Choose Image</label>
                                    </div>
                                  {{--  <div class="input-group-append">
                                        <button class="btn btn-primary" id="imageplus"><i class="fa fa-plus-circle"></i> </button>
                                    </div>

                                --}}
                                </div>
                            </div>

                        </div>
                        


                       {{-- <div class="row">

                            <div class="card-body">
                                <label for="name">Page Details</label>
                                <div class="mb-3">
                                    <textarea id="editor1" name="editor1" style="width: 100%"></textarea>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            <label for="name">Details</label>
                            <div class="col-md-12">
                                <input type="checkbox" name="status" value="1" checked>
                            </div>
                        </div>





                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('notice.index')}}" class="btn btn-danger">Cancel</a>


                    </form>
                </div>
            </div>
        </section>

    </div>
    <script>
        $(function () {

            $(document).ready(function () {
                var i =0;
                $('#imageplus').click(function (e) {

                    e.preventDefault();


                    var value ='<div class="input-group div-'+i+'" style="margin-top: 5px;"> <div class="custom-file" >\n' +
                        '                                    <input class="custom-file-input imagechk2" id="image" name="image[]" type="file" value=""><label class="custom-file-label imglink-'+i+'" for="exampleInputFile" id="imageink-'+i+'">Choose Image '+i+'</label>\n' +
                        '                                </div>\n' +
                        '                                <div class="input-group-append">\n' +
                        '                                    <button class="btn btn-danger imagerowdelete" id="'+i+'"><i class="fa fa-trash"></i> </button>\n' +
                        '                                </div></div>';



                    $('#appendimage').append(value);
                    i++;


                    $('.imagerowdelete').click(function (e) {
                        e.preventDefault();
                        var id = this.id;

                        $('.div-'+id+'').remove();
                    });

                    $('.imagechk2').change(function () {

                        var value = $(this).val();

                        var a = i-1 ;
                        $('#imageink-'+a+'').text(value);
                    });

                });


            });
            $('.imagechk').change(function () {

                var value = $(this).val();


                $('#imageink').text(value);
            });
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
    </script>
@endsection

















