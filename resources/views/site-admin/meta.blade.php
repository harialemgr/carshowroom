   
@section('meta-content')
    <link href="{{ asset('css/backend/style4.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="{{ asset('css/backend/custom.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!--   <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

	<!-- Latest compiled and minified CSS -->


     <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @endsection