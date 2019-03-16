@section("meta-content")


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style>
    .gallery-folder{
        font-size: 50px;
    }
    .invalid-input {
        color: red;
    }
    .column {
  float: left;
  width: 33.33%;
  margin: 5px;
  padding:5px;
}
img.card-img-top{
  
}
h4.card-title.column{
  width:50%;
}
a.column{
  width:5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

    </style>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">


    {{--script --}}

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
    <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"> </script>

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
            var btnclick = document.querySelector('#btnclick')
            btnclick.onclick=function(){
                alert('ok')
            }
        </script>
    
@endsection