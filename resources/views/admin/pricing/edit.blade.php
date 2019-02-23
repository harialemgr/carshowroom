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
                    <h3 class="card-title">Edit Pricing                                            
                    <a href="{{route('pricing.index')}}" class="btn btn-warning pull-right"><i class="fa fa-backward"></i> &nbsp; Back</a>
                    </h3>

                </div>
                <div class="card-body">
                    <form action="{{route('pricing.update', $pricing->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                        <div class="form-group col-md-3">
                            <label for="speed">Speed</label>
                            <input type="text" class="form-control {{ $errors->has('speed') ? 'is-invalid' : '' }}" name="speed" placeholder="" value="{{ $pricing->speed }}">
                            @if($errors->has('speed'))
                                <span class="invalid-input">{{ $errors->first('speed') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="unit">Unit</label>
                            @php
                                $unit = array(
                                    'KBit/sec' => 'KBit/sec',
                                    'MBit/sec' => 'MBit/sec',
                                    'GBit/sec' => 'GBit/sec',
                                );
                            @endphp
                            {!! Form::select('unit', $unit, $pricing->unit, ['class' => ($errors->has('unit') ? 'form-control is-invalid' : 'form-control' )]) !!}
                            @if($errors->has('unit'))
                                <span class="invalid-input">{{ $errors->first('unit') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" placeholder="" value="{{ $pricing->price }}">
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
                            {!! Form::select('plan_type', $plan_type, $pricing->plan_type, ['class' => ($errors->has('plan_type') ? 'form-control is-invalid' : 'form-control' )]) !!}
                            @if($errors->has('plan_type'))
                                <span class="invalid-input">{{ $errors->first('plan_type') }}</span>
                            @endif
                        </div>                        
                        <div class="form-group col-md-9">
                            <label for="traffic">Traffic</label>
                            <input type="text" class="form-control {{ $errors->has('traffic') ? 'is-invalid' : '' }}" name="traffic" placeholder="" value="{{ $pricing->traffic }}">
                            @if($errors->has('traffic'))
                                <span class="invalid-input">{{ $errors->first('traffic') }}</span>
                            @endif
                        </div> 
                        <div class="form-group col-md-3">
                            <label for="unit">Display to homepage</label>
                            {!! Form::select('display', array('1' => 'Show', '2' => 'Hide'), $pricing->display, [ 'class' => ($errors->has('display') ? 'form-control is-invalid' : 'form-control' ), 'placeholder' => 'Choose ...']) !!}
                            @if($errors->has('display'))
                                <span class="invalid-input">{{ $errors->first('display') }}</span>
                            @endif
                        </div>                                                                                                  
                     </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('member.index')}}" class="btn btn-danger">Cancel</a>
                    </form>
                    <div class=" form-group col-md-12 row">
                    
                    </div>
                </div>
            </div>
        </section>

    </div>
    @endsection

    @section('scripts')
    <script>
        @if(session('successMsg'))
            toast({ type: 'success', text: `{{ session('successMsg') }}` })
        @elseif(session('failedMsg'))
            toast({ type: 'warning', title: `{{ session('failedMsg') }}` })
        @elseif(session('warningMsg'))
            toast({ type: 'warning', title: `{{ session('warningMsg') }}` })
        @endif
    </script>
    @endsection