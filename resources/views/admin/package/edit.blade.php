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
                    <h3 class="card-title">Package  Update                                            <a href="{{route('back')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('package.update',$package->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="name">Package Type</label>
                                <select class="form-control" name="type" required>
                                    <option value="1" @if($package->type == 1) selected @endif >Inbound</option>
                                    <option value="2" @if($package->type == 2)selected @endif >Outbound</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="name">Package Category</label>
                                <select class="form-control" name="category" required>
                                    @foreach($pcategory as $category)
                                        <option value="{{$category->id}}" @if($package->pcategory_id == $category->id) selected @endif >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Package Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$package->name}}" placeholder="Enter Package Name" required>

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name">Duration</label>
                                <input type="text" class="form-control" id="name" name="duration" value="{{$package->duration}}" placeholder="Enter Package duration" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Minimum Amount</label>
                                <input type="text" class="form-control" id="name" name="amount" value="{{$package->amount}}" placeholder="Enter Package minimum amount" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Group Size</label>
                                <input type="text" class="form-control" id="name" name="group_size" value="{{$package->group_size}}" placeholder="Enter Package Group size" required>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-6" id="appendimage">
                                <label>Image Input</label>

                                @foreach($package->images as $image)

                                <div class="input-group div-{{$loop->index + 100}}" style="margin-top:10px;">
                                    <input type="hidden" name="updateimage[]" value="{{$image}}">
                                    <div class="custom-file">
                                        <input class="custom-file-input imagechk" id="image" name="image[]" value="{{$image}}" type="file">
                                        <label class="custom-file-label" for="exampleInputFile" id="imageink">{{$image}}</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-danger imagerowdelete" id="{{$loop->index + 100}}"><i class="fa fa-trash"></i> </button>
                                    </div>


                                   @if($loop->first)
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="imageplus"><i class="fa fa-plus-circle"></i> </button>
                                    </div>
                                       @endif

                                </div>

                                @endforeach
                            </div>
                            <div class="form-group col-md-6">
                                @foreach($package->images as $image)


                                    <img src="{{asset('images/package/'.$image)}}" width="150px;">


                                @endforeach
                            </div>

                        </div>


                        <div class="row">

                            <div class="card-body">
                                <label for="name">Details</label>
                                <div class="mb-3">
                                    <textarea id="editor1" name="editor1" style="width: 100%"> {{$package->details}}</textarea>
                                </div>
                            </div>
                        </div>






                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('back')}}" class="btn btn-danger">Cancel</a>


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


                $('.imagerowdelete').click(function (e) {
                    e.preventDefault();
                    var id = this.id;

                    $('.div-'+id+'').remove();
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
        //        function readURL(input) {
        //            if (input.files && input.files[0]) {
        //                var reader = new FileReader();
        //
        //                reader.onload = function (e) {
        //
        //                    $('#imgshow').append('<img src="'+e.target.result+'" width="150"');
        //
        //                };
        //
        //                reader.readAsDataURL(input.files[0]);
        //            }
        //        }
    </script>
@endsection
