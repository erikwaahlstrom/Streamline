@extends('logintemplate')

@section('content')
        <div class="row">
        <div class="input-field">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
@stop
