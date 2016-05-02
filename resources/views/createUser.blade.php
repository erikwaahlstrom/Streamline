@extends('template')
@section('content')


  <div class="title">Lägg till personal</div>

    <!-- Feedback-message -->
    @if (session('status'))
      <div class="card-panel #66bb6a green lighten-1">
        {{ session('status') }}
      </div>
    @endif

 
    <form id="createUser" class="inputform" role="form" method="POST" action="{{ url('/newuser') }}">
    {!! csrf_field() !!}

            <div>
              <input name="email"  placeholder="Email" type="text" class="validate">
            </div>

            <div>
              <input name="password"  placeholder="Lösenord" type="password" class="validate">
            </div>

            <div>
              <input name="password_confirmation"  placeholder="Bekräfta lösenord" type="password" class="validate">
            </div>

              <div class="input-field">
                <select class="browser-default" name="role">
                  <option value="" disabled selected>Användartyp</option>
                  <option value="1">Speditör (Alla behörigheter)</option>
                  <option value="3">Lagerpersonal (Tillgång till granskning)</option>
                </select>
              </div>

        <button class="btn waves-effect default #000000" id="addsupplier" type="submit">Bekräfta
        <i class="material-icons right">send</i>
        </button>

    </form>

  <!--  <form class="inputform" role="form" method="POST" action="{{ url('/newuser') }}">
  {!! csrf_field() !!}

            <div class="input-field">
              <input id="email" type="email" class="validate" name="email">
              <label for="email" data-error="wrong" data-success="right" class="active">Email</label>
            </div>

            <div class="input-field">
              <input id="password" type="password" class="validate" name="password">
              <label for="password" data-error="wrong" data-success="right" class="active">Lösenord</label>
            </div>

            <div class="input-field">
              <input id="reapeatpassword" type="password" class="validate" name="password_confirmation">
              <label for="repeatpassword" class="active">Upprepa Lösenord</label>
            </div>


              <div class="input-field">
                <select class="browser-default" name="role">
              <option value="" disabled selected>Användartyp</option>
              <option value="1">Speditör (Alla behörigheter)</option>
              <option value="3">Lagerpersonal (Tillgång till granskning)</option>
                </select>
              </div>

        <button class="btn waves-effect default #000000" id="addsupplier" type="submit">Bekräfta
        <i class="material-icons right">send</i>
        </button>

    </form> -->


@stop
