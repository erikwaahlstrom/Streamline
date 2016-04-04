@extends('template')

@section('content')


    <div class="title">Lägg till användare</div>
      <form class="inputform">
        
            <!-- form start -->
            <div class="input-field">
              <input id="name" type="text" class="validate">
              <label for="name" class="active" id="inputcolor">Användare</label>
            </div>
        
            <div class="input-field">
              <input id="password" type="password" class="validate">
              <label for="password" class="active" id="inputcolor">Lösenord</label>
            </div>

            <div class="input-field">
              <input id="email" type="email" class="validate">
              <label for="email" class="active" id="inputcolor">Email</label>
            </div>
      
              <div class="input-field">
                <select class="browser-default">
              <option value="" disabled selected>Behörighet</option>
              <option value="1">Lagerchef (Alla behörigheter)</option>
              <option value="2">Lagerpersonal (Tillgång till vissa delar)</option>
              <option value="3">Godsmottagare (Endast tillgång till överblick)</option>
                </select>
              </div>

          <!-- Button -->
              <button class="btn waves-effect default #5A9AD0" type="submit" name="action" id="confirmknapp"> Bekräfta
                <i class="material-icons right">done</i>
              </button>
    </form>
@stop
