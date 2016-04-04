<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        <link href="{{ url('css/main.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
    </head>

    <body>
    <div class="sidebar">
        <!-- Sidenav: Sidmenyn för dashboard -->
    <!-- <div class="sidebar"> -->
        <ul id="slide-out" class="side-nav fixed"> 
     
        <!-- Heléns Logga -->
        <div class="logo-box"> 
          <div class="helens-logga">
            <img src="{{url('img/helens-logga.png')}}" class="logo">
          </div>
        </div> 
        <!-- Logga End -->
<div class="toplinks">
      <li><a href="#!"><i class="material-icons">toc</i>Ny Leverantör</a></li>
        <li><a href="#!"><i class="material-icons">toc</i>Redigera Leverantörer</a></li>
      <li><a href="#!"><i class="material-icons">toc</i>Ankommande leveranser</a></li>
</div>
    <div class="bottomlinks"> 

          <h5>Inloggad som <br>{{ $user->email }}</h5>

      <li>  
        <a href="{{url('/logout')}}"><i class="material-icons">input</i> Logga Ut</a> 
      </li>
       
        <li>
          <a href="#"><i class="material-icons">language</i>Språk</a>
        </li>
        </div>
      </ul>
    </div>
    <!-- </div> -->
  
      {{-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> --}} 

    <!-- </div> -->
    <!-- Sidenav end -->

        <!-- Container: Innehåll för dashboard -->
        <!-- <div class="container"> -->
          <div class="content">
            @yield('content')
          </div>
        <!-- </div> -->
        <!-- Container end -->

<script src="./jquery.js"></script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
  jQuery('#datetimepicker').datetimepicker();
</script>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<!--
      <script type="text/javascript">
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
      </script>
 -->
    </body>
</html>
