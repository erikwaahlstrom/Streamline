@extends('logintemplate')

@section('content')

<meta http-equiv="refresh" content="30; url=/registertransport" />

	<img src="{{url('img/helens-logga.png')}}" id="helens-logga">
    	<div class="row">

		    <h4 style="color: #fff;">Ankomstregistrering slutförd </h4>
		    	<br><br>
		    <h5 style="color: #fff;"> Din ankomsttid är:
		        <br>  
		        <br> {{$booking->date}}
		 
		        <br><br> Avlossningsplats: {{$booking->drop_place}} 
		    </h5>
 
     	</div>

  <a href="#"><i class="material-icons small" id="languageicon">language</i></a>

@stop
