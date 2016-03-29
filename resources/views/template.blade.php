<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        <link href="{{ url('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Sidenav: Sidmenyn för dashboard -->
    <div class="sidebar"><ul id="slide-out" class="side-nav fixed">

        <!-- Heléns Logga -->
        <div class="logo-box"> <div class="helens-logga">
    <img src="{{url('img/helens-logga.png')}}" class="logo">
        </div></div>
        <!-- Logga End -->

      <li><a href="#!"><i class="tiny material-icons">label_outline </i> Ny Leverantör</a></li>
        <li><a href="#!"><i class="tiny material-icons">label_outline </i> Redigera Leverantörer</a></li>
      <li><a href="#!"><i class="tiny material-icons">label_outline </i> Ankommande leveranser</a></li>
      
          <h5>Inloggad som Leif Larsson</h5>

      <div class="loggaut"><a href="{{url('/logout')}}"><i class="tiny material-icons">input</i> Logga Ut</a></div>
      <div class="lang"><a href="#"><i class="tiny material-icons">language</i>Språk</a>
      
      </div>
      </ul>

    {{-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> --}}

    </div>
        <!-- Sidenav end -->

        <!-- Container: Innehåll för dashboard -->
        <div class="container">
            @yield('content')
        </div>
        <!-- Container end -->

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
      <script type="text/javascript">
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
      </script>
    </body>
</html>
