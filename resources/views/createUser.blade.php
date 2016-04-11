@extends('template')

@section('content')

    
    <div class="title">Lägg till användare</div>

    <!-- Feedback-message -->
    @if (session('status'))
      <div class="card-panel #66bb6a green lighten-1">
        {{ session('status') }}
      </div>
    @endif
    
    <form class="inputform" role="form" method="POST" action="{{ url('/newuser') }}">
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
                <select class="browser-default" name="role">
              <option value="" disabled selected>Användartyp</option>
              <option value="1">Speditör (Alla behörigheter)</option>
              <option value="3">Lagerpersonal (Tillgång till granskning)</option>
                </select>
              </div>

          <!-- Button -->
        <button class="btn waves-effect default #000000" id="addsupplier" type="submit">Bekräfta
        <i class="material-icons right">send</i>
        </button>
    </form>


@stop
