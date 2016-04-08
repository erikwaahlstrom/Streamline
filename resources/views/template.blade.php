<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href="{{ url('css/main.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
    </head>

    <body>

    <div class="sidebar">
    
        <ul class="side-nav fixed"> 
     
        <!-- Heléns Logga -->

        <div class="logo-box"onclick="location.href='dashboard';"> 

          <div class="helens-logga">

            <img src="{{url('img/helens-logga.png')}}" class="logo">
          </div>

        </div> 
        
        <!-- Logga End -->
<div class="toplinks">
        <!-- Sidmenyn för Speditör -->
      @if(Auth::user()->role == 1)
    <li><a href="create"><i class="material-icons">perm_identity</i>Lägg till leverantör</a></li>
    <li><a href="createUser"><i class="material-icons">supervisor_account</i>Lägg till personal</a></li>
    <li><a href="edit"><i class="material-icons">mode_edit</i>Redigera Leverantörer</a></li>
    <li><a href="deliveries"><i class="material-icons">import_export</i>Ankommande Leveranser</a></li>

        <!-- Sidmenyn för Leverantör -->
      @elseif(Auth::user()->role == 2)
    <li><a href="#!"><i class="material-icons">note_add</i>Boka Leverans</a></li>
    <li><a href="#!"><i class="material-icons">description</i>Mina Bokningar</a></li>

        <!-- Sidmenyn för Lagerpersonal -->
      @elseif(Auth::user()->role == 3)
    <li><a href="deliveries"><i class="material-icons">import_export</i>Ankommande Leveranser</a></li>

      @endif 
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
       <a href="" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>

        <!-- Content start -->
          <div class="content">
            @yield('content')
          </div>
        <!-- Content end -->

<script src="./jquery.js"></script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script type="text/javascript">
  jQuery('#datetimepicker').datetimepicker();
</script>

    </body>
</html>
