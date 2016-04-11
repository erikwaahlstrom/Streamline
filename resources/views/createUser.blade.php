@extends('template')

@section('content')


    <div class="title">Lägg till användare</div>
    
    <form class="inputform" role="form" method="POST" action="{{ url('/register') }}">
  {!! csrf_field() !!}
        
            <!-- form start -->
            <div class="input-field">
              <input id="email" type="email" class="validate" name="email">
              <label for="email" class="active" id="inputcolor">Email</label>
            </div>
        
            <div class="input-field">
              <input id="password" type="password" class="validate" name="password">
              <label for="password" class="active" id="inputcolor">Lösenord</label>
            </div>

            <div class="input-field">
              <input id="reapeatpassword" type="password" class="validate" name="password_confirmation">
              <label for="repeatpassword" class="active" id="inputcolor">Upprepa Lösenord</label>
            </div>


              <div class="input-field">
                <select class="browser-default">
              <option value="" disabled selected>Användartyp</option>
              <option value="1">Speditör (Alla behörigheter)</option>
              <option value="2">Lagerpersonal (Tillgång till granskning)</option>
                </select>
              </div>

          <!-- Button -->
        <button class="btn waves-effect default #000000" id="addsupplier" type="submit">Bekräfta
        <i class="material-icons right">send</i>
        </button>
    </form>


@stop
