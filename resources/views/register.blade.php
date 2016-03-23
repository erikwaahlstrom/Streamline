@extends('logintemplate')

@section('content')
<img src="{{url('img/helens-logga.png')}}" id="helens-logga">
    <div class="row">
        <div class="input-field white-text text-darken-2">
          <input id="email" type="email" class="validate">
          <label for="email" class="white-text text-darken-2">Referensnummer</label>
        </div>
      </div>

    <button class="btn waves-effect default #ffffff white" type="submit" name="action" id="loginknapp">Gå vidare
    <i class="material-icons right">send</i>
  </button>

  <a href="#"><i class="material-icons small" id="languageicon">language</i></a>
@stop
