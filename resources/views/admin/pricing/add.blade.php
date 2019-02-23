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
                    <h3 class="card-title">Add Pricing                                            
                    <a href="{{route('pricing.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('pricing.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-3">
                            <label for="speed">Speed</label>
                            <input type="text" class="form-control {{ $errors->has('speed') ? 'is-invalid' : '' }}" name="speed" placeholder="" value="{{ old('speed') }}">
                            @if($errors->has('speed'))
                                <span class="invalid-input">{{ $errors->first('speed') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="unit">Unit</label>
                            <select class="form-control {{ $errors->has('speed') ? 'is-invalid' : '' }}" name="unit">
                                <option value="" selected hidden>Choose ... </option>
                                <option value="KBit/sec">KBit/sec</option>
                                <option value="MBit/sec">MBit/sec</option>
                                <option value="GBit/sec">GBit/sec</option>
                            </select>
                            @if($errors->has('unit'))
                                <span class="invalid-input">{{ $errors->first('unit') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" placeholder="" value="{{ old('price') }}">
                            @if($errors->has('price'))
                                <span class="invalid-input">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="unit">Plan Type</label>
                            @php
                                $plan_type = array(
                                    '15 days' => '15 Days',
                                    '1 month' => 'Per Month',
                                    '60 days' => '60 days',
                                    '6 months' => '6 months',
                                    '1 year' => 'Per Year'
                                );
                            @endphp
                            {!! Form::select('plan_type', $plan_type, null, ['class' => ($errors->has('plan_type') ? 'form-control is-invalid' : 'form-control' ), 'placeholder' => 'Choose ...']) !!}
                            @if($errors->has('plan_type'))
                                <span class="invalid-input">{{ $errors->first('plan_type') }}</span>
                            @endif
                        </div>                        
                        <div class="form-group col-md-9">
                            <label for="traffic">Traffic</label>
                            <input type="text" class="form-control {{ $errors->has('traffic') ? 'is-invalid' : '' }}" name="traffic" placeholder="" value="{{ old('traffic') }}">
                            @if($errors->has('traffic'))
                                <span class="invalid-input">{{ $errors->first('traffic') }}</span>
                            @endif
                        </div> 
                        <div class="form-group col-md-3">
                            <label for="unit">Display to homepage</label>
                            {!! Form::select('display', array('1' => 'Show', '2' => 'Hide'), null, [ 'class' => ($errors->has('display') ? 'form-control is-invalid' : 'form-control' ), 'placeholder' => 'Choose ...']) !!}
                            @if($errors->has('display'))
                                <span class="invalid-input">{{ $errors->first('display') }}</span>
                            @endif
                        </div>                                                                                                  
                     </div>
                       {{-- <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Description</label>
                                <textarea id="editor1" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" placeholder="Add Description Here">{{ old('description') }}</textarea>
                                @if($errors->has('description'))
                                    <span class="invalid-input">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div> --}}
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
