@extends('template')
@section('content')
<div class="title">Redigera Leverantörer</div>

  <div class="container">
        <div class="row">

          <form method="POST" action="{{ url('/searchsupplier') }}">
          {!! csrf_field() !!}

              <div class="col s10">

                <input id="searchinput" name="search" placeholder="Sök leverantör..." type="text" class="validate">

              </div> 

              <div class="col s2">
              <button class="btn waves-effect default #000000 searchbtn" type="submit">Sök</button>
              </div>

          </form>
      </div>
  </div>

    <div class="container">
        <form method="POST" action="{{ url('/searchsupplier') }}">
            {!! csrf_field() !!}
            <div class="input-field">
              <input id="search" type="text" class="validate" name="search">
              <label for="search">Sök leverantörer...</label>
            </div>
            <button class="btn waves-effect default #000000 searchbtn" type="submit">Sök</button>
        </form>
    </div>

    @if (session('error'))
    <div class="card-panel #66bb6a red lighten-1">
        {{ session('error') }}
    </div>
    @endif

    @if (session('suppliers'))
        @foreach(session('suppliers') as $supplier)

 <div class="container">
 
            <div class="card">
            <div class="card-content black-text">
                <span class="card-title"> {{ $supplier->name }} </span>
                <p>Email: {{ $supplier->email }}</p>
                <p>Bokningsalternativ:</p>
             <form method="POST" action="{{ url('/editsupplier') }}">
                  {!! csrf_field() !!}
             <select class="browser-default" name="favorite" onchange="this.form.submit()">

              @if($supplier->favorite == 24)

                  <option value="24" selected>24 h</option>
                  <option value="48">48 h</option>

            @endif

              @if($supplier->favorite == 48)

                  <option value="48" selected>48 h</option>
                  <option value="24">24 h</option>

            @endif

            </select>

              </div>
              <div class="card-action">

                <form method="POST" action="{{ url('/deletesupplier') }}">
                        {!! csrf_field() !!}
                         <input type="hidden" name="id" value="{{ $suppliers }}"></input>
                    <button class="btn waves-effect default #000000 deletebtn" type="submit">Radera</button>
                </form>

            </div>
            </div>

        @endforeach
    @else

    @foreach($suppliers as $supplier)

        <div class="card">
        <div class="card-content black-text">
            <span class="card-title"> {{ $supplier->name }} </span>
            <p>Email: {{ $supplier->email }}</p>
            <p>Bokningsalternativ:</p>
         <form method="POST" action="{{ url('/editsupplier') }}">
              {!! csrf_field() !!}
         <input type="hidden" name="id" value="{{ $supplier->id }}"></input>
         <input type="hidden" name="favorite" value="{{ $supplier->favorite }}"></input>
         <select class="browser-default" name="favorite" onchange="this.form.submit()">

          @if($supplier->favorite == 24)

              <option value="24" selected>24 h</option>
              <option value="48">48 h</option>

        @endif

          @if($supplier->favorite == 48)

              <option value="48" selected>48 h</option>
              <option value="24">24 h</option>

        @endif

        </select>
        </form>
          </div>
          <div class="card-action">

            <form method="POST" action="{{ url('/deletesupplier') }}">
                    {!! csrf_field() !!}
                     <input type="hidden" name="id" value="{{ $supplier->id }}"></input>
                <button class="btn waves-effect default #000000 deletebtn" type="submit">Radera</button>
            </form>

        </div>
        </div>

    @endforeach
    @endif
</div>
@stop
