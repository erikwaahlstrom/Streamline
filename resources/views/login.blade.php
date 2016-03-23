@extends('logintemplate')

@section('content')
<img src="{{url('img/helens-logga.png')}}" id="helens-logga">
    <div class="row">
        <div class="input-field white-text text-darken-2">
          <input id="email" type="email" class="validate">
          <label for="email" class="white-text text-darken-2">Användarnamn</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field white-text text-darken-2">
          <input id="password" type="password" class="validate">
          <label for="password" class="white-text text-darken-2">Lösenord</label>
        </div>
      </div>

    <button class="btn waves-effect default #ffffff white" type="submit" name="action" id="loginknapp">Logga in
    <i class="material-icons right">send</i>
  </button>

  <a href="#"><i class="material-icons small" id="languageicon">language</i></a>
@stop
