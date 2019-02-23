
@extends('frontend.master', ['category_id' => $category_id])
@include('layouts.meta')
@section('main-content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                  <li class="breadcrumb-item active" aria-current="page">PAGES</li>
                  <li class="breadcrumb-item active" aria-current="page">CAREERS</li>
                  <li id="notImp" class="breadcrumb-item active" aria-current="page">{{ strtoupper($vacancy->title) }}</li>
                </ol>
</nav>
<div class="container-fluid" style="background-color: white;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            {{-- <h1>VACANCY TITLE</h1> --}}
            <h1>{{ $vacancy->title }}</h1>
        </div>
    </div>
    <div class="container">
    <div class="card">
    
        <img src="{{asset('images/career/'.$images[0])}}" class="card-img-top">
        <div class="card-body">
            <div class="card-title">APPLY NOW</div>
            <div class="apply">
            <form action="{{ route('appliedvacancy.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="applied_post" value="{{ $vacancy->title }}" hidden>
                <div class="row">
                    <div class="col-md-4">
                        <input name="name" type="text" class="control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name" value="{{ old('name') }}" required>
                        @if($errors->has('name'))
                            <span class="invalid-input">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <input name="address" type="text" class="control  {{ $errors->has('address') ? 'is-invalid' : '' }}" placeholder="Address" value="{{ old('address') }}" required>
                        @if($errors->has('address'))
                            <span class="invalid-input">{{ $errors->first('address') }}</span>
                        @endif                 
                    </div>
                    <div class="col-md-4">
                        <input name="contact" type="text" class="control  {{ $errors->has('contact') ? 'is-invalid' : '' }}" placeholder="Phone No." value="{{ old('contact') }}" required>
                        @if($errors->has('contact'))
                            <span class="invalid-input">{{ $errors->first('contact') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label class="upload">Upload CV</label>
                        <input name="curriculum_vitae" type="file" class="control  {{ $errors->has('curriculum_vitae') ? 'is-invalid' : '' }}" required>
                         @if($errors->has('curriculum_vitae'))
                            <span class="invalid-input">{{ $errors->first('curriculum_vitae') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="button-contact" type="submit">Submit</button>
                    </div>
                </div>
            </form>    
            </div>
        </div>
    </div>
    </div>
   
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
    <script>

        @if (session('successMsg'))
            swal({
                type: 'success',
                title: `{{ session('successMsg') }}`,
                text: `Thanks for applying. We will contact you if you are selected !`
            })
        @elseif(session('failedMsg'))
            swal({
                type: 'warning',
                title: `{{ session('failedMsg') }}`,
            })
        @elseif(session('warningMsg'))
            swal({
                type: 'warning',
                title: `Internal Error !`,
                text: `{{ session('warningMsg') }}`
            })
        @endif    
    </script>
@endsection

