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
                    <h3 class="card-title">Add Testimonial                                            
                    <a href="{{route('testimonial.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-12">
                                <label for="name">Customer Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="natureofappoitment" name="name" placeholder="Enter Customer Name" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <span class="invalid-input">{{ $errors->first('name') }}</span>
                                @endif
                         </div>
                         </div>
                       <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Description</label>
                                <textarea id="editor1" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" placeholder="Add Description Here">{{ old('description') }}</textarea>
                                @if($errors->has('description'))
                                    <span class="invalid-input">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{route('member.index')}}" class="btn btn-danger">Cancel</a>
                    </form>
                    <div class=" form-group col-md-12 row">
                    
                    </div>
                </div>
            </div>
        </section>

    </div>
    
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
