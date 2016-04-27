@extends('logintemplate')

@section('content')
<img src="{{url('img/helens-logga.png')}}" id="helens-logga">
    <div class="row">

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerreference') }}">
        {!! csrf_field() !!}
        <div class="input-field white-text text-darken-2">
        <input id="referencenumber" type="text" class="validate" name="reference_number">
        <label for="referencenumber" class="white-text text-darken-2">Referensnummer</label>
    </div>
    </div>
        <button class="btn waves-effect default #ffffff white" type="submit" name="action" id="loginknapp">Gå Vidare
          <i class="material-icons right">send</i>
        </button>
      </form>

  <a href="#"><i class="material-icons small" id="languageicon">language</i></a>
@stop