@extends('frontend.master', ['category_id' => $category_id])
@section('main-content')

<div class="container-fluid" style="background-color:black;color:white">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>CARS</h1>
        </div>
    </div>
    <div class="row">
    <section class="banner-bottom-wthree py-5 px-4">
            <div class="row banner-grids">
                <div class="col-md-6 content-left-bottom text-left pr-lg-5">
                    <h4>TRIPLE HAMBURGER WITH CHEESE MEAL</h4>
                    <p class="mt-2 text-left">Integer pulvinar leo id viverra feugiat.Pellentesque libero justo, semper at tempus vel, ultrices in sed ligula. Nulla uter sollicitudin velit.Sed porttitor orci vel fermentum elit maximus. Curabitur ut turpis massa in condimentum libero. Pellentesque maximus Pellentesque libero justo Nulla uter sollicitudin velit. Sed porttitor orci vel ferm semper at vel, ultrices in ligula semper at vel.Curabitur ut turpis massa in condimentum libero.</p>

                </div>
                <div class="col-md-6 content-right-bottom text-right">
                    <img src="{{asset('storage/car/black.jpg')}}" alt="news image" class="img-fluid">
                </div>
            
        </div>
    </section>

    </div>
</div>
@endsection