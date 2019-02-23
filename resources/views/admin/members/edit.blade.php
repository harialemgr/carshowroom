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
                    <h3 class="card-title">Member Update                                            <a href="{{route('member.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('member.update',$member->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="name">Member Category</label>
                                <select class="form-control" name="category" required>
                                    @foreach($member_categories as $category)
                                        <option value="{{$category->id}}" @if($member->member_category_id == $category->id) selected @endif >{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Member Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$member->name}}" placeholder="Enter Member Name" required>

                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-6" id="appendimage">
                                <label>Member Image</label>

                                @foreach($member->images as $image)

                                    <div class="input-group div-{{$loop->index + 100}}" style="margin-top:10px;">
                                        <input type="hidden" name="updateimage[]" value="{{$image}}">
                                        <div class="custom-file">
                                            <input class="custom-file-input imagechk" id="image" name="image[]" value="{{$image}}" type="file">
                                            <label class="custom-file-label" for="exampleInputFile" id="imageink">{{$image}}</label>
                                        </div>
                                        {{--<div class="input-group-append">
                                            <button class="btn btn-danger imagerowdelete" id="{{$loop->index + 100}}"><i class="fa fa-trash"></i> </button>
                                        </div>
                                        


                                        @if($loop->first)
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" id="imageplus"><i class="fa fa-plus-circle"></i> </button>
                                            </div>
                                        @endif
                                        --}}

                                    </div>

                                @endforeach
                            </div>
                            <div class="form-group col-md-6">
                                @foreach($member->images as $image)


                                    <img src="{{asset('images/member/'.$image)}}" width="150px;">


                                @endforeach
                            </div>

                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                                <label for="name">Member Designation</label>
                                <input type="text" value="{{$member->designation}}" class="form-control" id="designation" name="designation" placeholder="Enter Designation" required>

                         </div>
                         <div class="form-group col-md-6">
                                <label for="name"> Member Address</label>
                                <input type="text" value="{{$member->address}}" class="form-control" id="address" name="address" placeholder="Enter Address" required>

                         </div>

                         <div class="form-group col-md-6">
                                <label for="name">Member Phone</label>
                                <input type="text" value="{{$member->phone}}" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>

                         </div>
                         <div class="form-group col-md-6">
                                <label for="name">Member Email</label>
                                <input type="text" value="{{$member->email}}"class="form-control" id="email" name="email" placeholder="Enter Email" required>

                         </div>
                        <div class="form-group col-md-6">
                                <label for="name">Member Nature of Appointment</label>
                                <input type="text" value="{{$member->nature_of_appointment}}" class="form-control" id="natureofappoitment" name="natureofappointment" placeholder="Enter Nature of Appointment" required>

                         </div>
                         <div class="form-group col-md-6">
                                <label for="name">Member Qualification</label>
                                <input type="text" value="{{$member->qualification}}"class="form-control" id="qualification" name="qualification" placeholder="Enter Qualification" required>

                         </div>




                         </div>


                       {{--<div class="row">

                            <div class="card-body">
                                <label for="name">Details</label>
                                <div class="mb-3">
                                    <textarea id="editor1" name="editor1" style="width: 100%"> {{$member->summary}}</textarea>
                                </div>
                            </div>
                        </div>
                        --}}
                        <div class="row">
                            <label for="name">Details</label>
                            <div class="col-md-12">
                                <input type="checkbox" name="status" value="1" @if($member->publish == 1) checked @endif>
                            </div>
                        </div>
                    





                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('member.index')}}" class="btn btn-danger">Cancel</a>


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
