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
        <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    </head>

    <body onload="Materialize.fadeInImage('.content')">


        <ul id="slide-out" class="side-nav fixed">

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

    <li><a href="createUser"><i class="material-icons sidebaricons">supervisor_account</i>Lägg till personal</a></li>
    <li><a href="create"><i class="material-icons sidebaricons">perm_identity</i>Lägg till leverantör</a></li>
    <li><a href="edit"><i class="material-icons sidebaricons">mode_edit</i>Redigera Leverantörer</a></li>
    <li><a href="deliveries"><i class="material-icons sidebaricons">import_export</i>Ankommande Leveranser</a></li>
 
        <!-- Sidmenyn för Leverantör -->
      @elseif(Auth::user()->role == 2)
    <li><a href="newbooking"><i class="material-icons sidebaricons">note_add</i>Boka Leverans</a></li>
    <li><a href="#!"><i class="material-icons sidebaricons">description</i>Mina Bokningar</a></li>

        <!-- Sidmenyn för Lagerpersonal -->
      @elseif(Auth::user()->role == 3)
    <li><a href="deliveries"><i class="material-icons sidebaricons">import_export</i>Ankommande Leveranser</a></li>

      @endif
</div>

    <div class="bottomlinks sidebaricons">

          <h5>Inloggad som <br>{{ $user->email }}</h5>

      <li>
        <a href="{{url('/logout')}}"><i class="material-icons sidebaricons">input</i> Logga Ut</a>
      </li>

        <li>
          <a href="#"><i class="material-icons sidebaricons">language</i>Språk</a>
        </li>

    </div>

      </ul>

        <!-- Dropdown Trigger -->
        <a class='dropdown-button btn' href='#' data-activates='dropdown1' data-beloworigin="true">Meny</a>

        <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>

        <!-- Dropdown för Speditör -->  
        @if(Auth::user()->role == 1)

    <li><a href="createUser"><i class="material-icons">supervisor_account</i>Lägg till personal</a></li>
    <li><a href="create"><i class="material-icons">perm_identity</i>Lägg till leverantör</a></li>
    <li><a href="edit"><i class="material-icons">mode_edit</i>Redigera Leverantörer</a></li>
    <li><a href="deliveries"><i class="material-icons">import_export</i>Ankommande Leveranser</a></li>

        <!-- Dropdown för Leverantör -->
      @elseif(Auth::user()->role == 2)
    <li><a href="newbooking"><br>Boka Leverans <i class="tiny material-icons" style="float:right;">note_add</i> </a> </li>
    <li><a href="#!"><br>Mina Bokningar<i class="tiny material-icons" style="float:right;">description</i> </a> </li>

        <!-- Dropdown för Lagerpersonal -->
      @elseif(Auth::user()->role == 3)

    <li><a href="deliveries"><i class="material-icons">import_export</i><br>Ankommande Leveranser</a></li>

      @endif
       <li>
       <!-- Space -->
       </li>

      <li class="divider"></li>
       <li style="color:#fff; padding-left: 16px; font-size: 12px;">Inloggad som <br>{{ $user->email }}</li>

      <li>
        <a href="{{url('/logout')}}"> Logga Ut <i class="tiny material-icons" style="float:right;">input</i></a>
      </li>

        <li>
          <a href="#">Språk<i class="tiny material-icons" style="float:right;">language</i> </a>
        </li>
      </ul>

      <!-- Dropdown END -->

        <!-- Content start -->
          <div class="content">
            @yield('content')
          </div>
        <!-- Content end -->


<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Datetimepicker -->
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>

<!-- Jquery validation -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

<!-- Materialize javascript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<!-- Materialize Dropdown -->
<script>
$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
</script>

<!-- Jquery datetimepicker -->
<script type="text/javascript">
var supplierFavorite = $('#datetimepicker').data("favorite");
console.log(supplierFavorite);
var logic = function(){
    if(supplierFavorite == 24){
        this.setOptions({
          minDate:'+1970/01/02'
        });
    }
};

  jQuery('#datetimepicker').datetimepicker({
      allowTimes:[
          '07:30', '08:00', '08:30', '09:30', '10:00', '10:30', '11:00', '11:30', '12:30', '13:00', '13:30', '14:30', '15:00', '15:30'
        ],
        disabledWeekDays: [0, 6],
      minDate: '+1970/01/03',
      maxDate: '+1970/01/3',
      onChangeDateTime:logic,
      onShow:logic
  });
</script>

<!-- Main javascript -->
<script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
