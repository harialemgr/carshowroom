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
                    <h3 class="card-title">Edit Branch                                            <a href="{{route('branch.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> &nbsp; All Branches</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('branch.update', $branch->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="Branch Name" value="{{ $branch->name }}" required>
                                @if($errors->has('name'))
                                 <span class="invalid-input">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Address</label>
                                <input type="text" class="form-control  {{ $errors->has('address') ? 'is-invalid' : '' }}"  name="address" placeholder="Enter Address" value="{{ $branch->address }}" required>
                                @if($errors->has('address'))
                                 <span class="invalid-input">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Email</label>
                                <input type="text" class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Enter email address" value="{{ $branch->email }}" required>
                                @if($errors->has('email'))
                                    <span class="invalid-input">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Contact</label>
                                <input type="text" class="form-control  {{ $errors->has('contact') ? 'is-invalid' : '' }}" name="contact" placeholder="Enter Contact Number" value="{{ $branch->contact }}" required>
                                @if($errors->has('contact'))
                                 <span class="invalid-input">{{ $errors->first('contact') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name">Branch Type</label>
                                {!! Form::select('branch_type', array('head' => 'Head Branch', 'child' => 'Child Branch'), $branch->branch_type, ['class' => ($errors->has('branch_type') ? 'form-control is-invalid' : 'form-control')]) !!}
                                @if($errors->has('contact'))
                                 <span class="invalid-input">{{ $errors->first('contact') }}</span>
                                @endif
                                @if(session('duplicateBranch'))
                                 <span class="invalid-input">{{ session('duplicateBranch') }}</span>
                                @endif
                            </div>                                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('branch.index')}}" class="btn btn-danger">Cancel</a>


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

















