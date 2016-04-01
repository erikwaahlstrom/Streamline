@extends('template')

@section('content')
<div class="content z1-depth-3">
    <div class="title">Lägg till leverantör</div><br>  

{{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
  {!! csrf_field() !!}
  <div class="row">
    <div class="input-field white-text text-darken-2">
      <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
      <label for="email" class="white-text text-darken-2">Användarnamn</label>
    </div>
   </div>
 --}}

<form class="form-horizontal" role="form" method="POST" action="{{ url('/newsupplier') }}">
    {!! csrf_field() !!}

        <div class="row">
        <div class="input-field">
            <input id="name" type="text" name="supplier" class="validate">
            <label for="name" id="inputcolor">Supplier</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field">
            <input id="name" type="text" name="email" class="validate">
            <label for="email" id="inputcolor">Email</label>
        </div>
        </div>


        <div class="input-field">
          <select class="browser-default" name="favorite">
              <option value="disabled selected">Favoritkund</option>
              <option value="1">Ja</option>
              <option value="2">Nej</option>
          </select>
        </div>


        <br>
        <button class="btn waves-effect default #000000" id="confirmknapp" type="submit">Skapa leverans
          <i class="material-icons right">send</i>
        </button>
</form>



  {{--   <!-- Gentis gamla - Input Fields -->
  <form class="input-form" role="form" method="POST" action="{{ url('/newsupplier') }}">
  {!! csrf_field() !!}

      <div class="row">
        <div class="input-field col s12">
          <input id="name" name="supplier" type="text" class="validate">
          <label for="name" class="active" id="inputcolor">Leverantör</label>
        </div>
        </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}">
          <label for="email" class="active" id="inputcolor">Email</label>
        </div>
      </div>

      <div class="input-field col s12">
        <select class="browser-default">
      <option value="" disabled selected>Favoritkund</option>
      <option value="1" name="">Ja</option>
      <option value="2" name="">Nej</option>
        </select>
      </div>

  </div>
</div>
  <!-- Input Fields: end -->

<!-- Button -->
  <button class="btn waves-effect default #5A9AD0" type="submit" name="action" id="confirmknapp"> Bekräfta
{{-- <i class="material-icons right">done</i>
</button>
    </form>

<<<<<<< Updated upstream
</div> --}}
=======
</div>
>>>>>>> Stashed changes
@stop
