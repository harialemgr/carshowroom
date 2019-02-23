@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">


                <li class="breadcrumb-item"><a href="{{route('home')}}">HOME</a></li>
                  <li class="breadcrumb-item active" aria-current="page">CONTACT</li>
                </ol>
</nav>
<div class="container-fluid" style="background-color: white;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>CONTACT US</h1>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-4">
            <div class="item">
                    <p class="title" style="color: #E2821E">Address</p>
                    <p class="text"><i class="fas fa-home" style="color: #E2821E"></i>&nbsp; {{ $head_branch->name }}</p>
                </div>
                 <div class="item">
                    <p class="title" style="color: #E2821E">Phones</p>
                    <p class="text"><i class="fas fa-phone fa-flip-horizontal" style="color: #E2821E"></i>&nbsp; {{ $head_branch->contact }}</p>
                </div>
            <div class="item">
                    <p class="title" style="color: #E2821E">Email</p>
                    <p class="text"><i class="fas fa-envelope" style="color: #E2821E"></i>&nbsp;{{ $head_branch->email }}</p>
            </div>   
        </div>
        <div class="col-md-8">
            <div class="item" style="margin:70px 20px 30px 20px !important;">
                 <p class="title" style="color: #E2821E">Miscellaneous Infromation</p>
                 <p class="text">Email us with any questions or inquiries or use our contact data.</p>
             </div>
             <form action="{{ route('customerquery.store') }}" method="post" style="margin-left: 20px;">
            @csrf
             <div class="row">
                <div class="col-md-4">
                    <input class="control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name" name="name" type="text" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="invalid-input">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="col-md-4">
                    <input class="control {{ $errors->has('email') ? 'is-invalid' : '' }}"  placeholder="Email" name="email" type="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="invalid-input">{{ $errors->first('email') }}</span>
                    @endif                    
                </div>
                <div class="col-md-4">
                    <input class="control {{ $errors->has('phone') ? 'is-invalid' : '' }}"  placeholder="Phone" name="phone" type="number" min="0" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                        <span class="invalid-input">{{ $errors->first('phone') }}</span>
                    @endif                    
                </div>
                <div class="col-md-12">
                    <textarea class="{{ $errors->has('message') ? 'is-invalid' : '' }}" rows="6" cols="82" placeholder="Message" name="message">{{ old('message') }}</textarea>
                    @if($errors->has('message'))
                        <span class="invalid-input">{{ $errors->first('message') }}</span>
                    @endif                    
                </div>
                <button class="button-contact" type="submit" >Send</button>
                <button class="button-contact" type="reset">Clear</button>
            </div>
             </form>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center"><p class="heading">Where we are</p></div>
    @foreach ($branches as $branch)
        <div class="col-md-4" >
            <div class="item">
                <p class="title" style="color: #E2821E">{{ $branch->name }}</p>
                <p class="text"><i class="fas fa-home" style="color: #E2821E"></i>&nbsp;{{ $branch->address }}</p>
                <p class="text"><i class="fas fa-envelope" style="color: #E2821E"></i>&nbsp; {{ $branch->email }}</p>
                <p class="text"><i class="fas fa-phone-volume" style="color: #E2821E"></i>&nbsp;{{ $branch->contact }}</p>
            </div>  
        </div>   
    @endforeach

        {{-- <div class="col-md-4">
            <div class="item">
                <p class="title">Manigram</p>
                <p class="text"><i class="fas fa-home"></i>&nbsp;Tilottama-8, Manigram</p>
                <p class="text"><i class="fas fa-envelope"></i>&nbsp;pourkas@gmail.com</p>
            </div>  
        </div>
        <div class="col-md-4">
            <div class="item">
                <p class="title">Manigram</p>
                <p class="text"><i class="fas fa-home"></i>&nbsp;Tilottama-8, Manigram</p>
                <p class="text"><i class="fas fa-envelope"></i>&nbsp;pourkas@gmail.com</p>
            </div>  
        </div> --}}
    </div>
    </div>
    <div class="row map" style="margin-top:50px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14139.82364478003!2d83.491024!3d27.6258821!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1544594680381" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<script>
@if(session('successMsg'))
    swal({
        type: 'success',
        title: 'Feedback/Query Sent',
        text: 'Thanks for your feedback/query !'
    });
 @endif   
</script>
@endsection

