@extends('template')
@section('content')
    <div class="title">Redigera Personal</div>

    <table class="striped">
          <thead>
            <tr>
                <th data-field="email">Email</th>
                <th data-field="role">Roll</th>
                <th data-field="delete">Radera personal</th>
            </tr>
          </thead>

        <tbody>
          @foreach($users as $user)
            <tr>
                <td>
                    {{ $user->email }}
                </td>            
                
                <td>
                    <div class="input-field">
                      <form method="POST" action="{{ url('/editUser') }}">
                       {!! csrf_field() !!}
                    <input type="hidden" name="user_id" value="{{ $user->id }}"></input>   
                    <select class="browser-default" name="role" onchange="this.form.submit()">

                       @if($user->role == 1)
                          <option value="1" selected>Speditör (Alla behörigheter)</option>
                          <option value="3">Lagerpersonal (Tillgång till granskning)</option>
                        @else
                          <option value="1">Speditör (Alla behörigheter)</option>
                          <option value="3" selected>Lagerpersonal (Tillgång till granskning)</option>
                        @endif
                    </select>
                    </form>
                    </div>
                </td>

                <td>
                    <form method="POST" action="{{ url('/deleteUser') }}">
                        {!! csrf_field() !!}
                         <input type="hidden" name="user_id" value="{{$user->id}}"></input>
                      <button class="btn waves-effect default #000000 deletebtn" type="submit">Radera</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>

@stop