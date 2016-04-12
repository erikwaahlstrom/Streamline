@extends('template')

@section('content')


    <div class="title">Lägg till leverantör</div><br>  

    @if (session('status'))
    <div class="card-panel #66bb6a green lighten-1">
        {{ session('status') }}
    </div>
    @endif

    <form class="inputform" role="form" method="POST" action="{{ url('/newsupplier') }}">
    {!! csrf_field() !!}


        <div class="input-field">
            <input type="text" name="name" class="validate">
            <label for="name" class="active">Leverantör</label>
        </div>

        <div class="input-field"> 
            <input type="text" name="email" class="validate">
            <label for="email" class="active">Email</label>
        </div>

        <div class="input-field">
          <select class="browser-default" browser-default name="favorite">
              <option value=""disabled selected>Bokningsmöjlighet</option>
              <option value="24">24 h</option>
              <option value="48">48 h</option>
          </select>
        </div>

        <br>
        <button class="btn waves-effect default #000000" id="addsupplier" type="submit">Bekräfta
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


</div> --}}


@stop
