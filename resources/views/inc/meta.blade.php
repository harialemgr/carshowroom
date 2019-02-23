@section('meta')
 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/support.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Robot:100" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        
        
        {{-- Bootstrap 4.0 --}} 
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.32.4/dist/sweetalert2.all.min.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



        {{-- Font Awesome Icons--}} <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        {{-- Footer CSS --}} <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        {{-- Contact CSS --}}<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        {{-- Laravel app.css --}}<link rel="stylehseet" href="{{ asset('css/app.css') }}">
        {{--Our Team CSS--}}<link rel="stylesheet" href="{{ asset('css/ourteam.css') }}">
        {{--Career CSS--}}<link rel="stylesheet" href="{{ asset('css/career.css') }}">
       {{-- raleway font  --}}<link href="https://fonts.googleapis.com/css?family=raleway" rel="stylesheet">
<style>
*{margin:0;}

body{
  font: 200 16px/1 Helvetica, Arial, sans-serif;
}
#overlay{
  position:fixed;
  z-index:99999;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background:rgba(0,0,0,0.9);
  transition: 1s 0.4s;
}
#progress{
  height:1px;
  background:#fff;
  position:absolute;
  width:0;                /* will be increased by JS */
  top:50%;
}
#progstat{
  font-size:0.7em;
  letter-spacing: 3px;
  position:absolute;
  top:50%;
  margin-top:-40px;
  width:100%;
  text-align:center;
  color:#fff;
}
</style>

<script>
$( document ).ready(function() {
    $('li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

});
</script>


<script>

            var btnclick = document.querySelector('#btnclick')
            btnclick.onclick=function(){
                alert('ok')
            }
        </script>

       {{-- owl carousel --}}
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
       <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
       <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />

       <script src="{{ asset('js/jquery.js') }}"></script>
       <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
       <script src="{{ asset('js/owljquery.js') }}"></script>

    

@endsection

