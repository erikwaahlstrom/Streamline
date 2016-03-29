@extends('logintemplate')

@section('content')
<img src="{{url('img/helens-logga.png')}}" id="helens-logga">

<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
  {!! csrf_field() !!}
  <div class="row">
    <div class="input-field white-text text-darken-2">
      <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
      <label for="email" class="white-text text-darken-2">Användarnamn</label>
    </div>
   </div>

  <div class="row">
    <div class="input-field white-text text-darken-2">
      <input id="password" type="password" class="validate" name="password">
      <label for="password" class="white-text text-darken-2">Lösenord</label>
    </div>
  </div>

  <button class="btn waves-effect default #ffffff white" type="submit" name="action" id="loginknapp">Logga in
    <i class="material-icons right">send</i>
  </button>
</form>

<a href="#"><i class="material-icons small" id="languageicon">language</i></a>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
