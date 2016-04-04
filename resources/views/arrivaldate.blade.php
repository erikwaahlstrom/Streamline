@extends('template')

@section('content')

<!-- <input type="date" class="datepicker"> -->
<div class="title">Boka Leverans</div>
<form id="bookingform" class="inputform" role="form" method="POST" action="{{ url('/newbooking') }}">
    {!! csrf_field() !!}
        <div class="input-field">
          <input id="datetimepicker" type="text" name="date">
          <label for="email">Datum & tid</label>
        </div>

        <div class="input-field">
          <input id="supplier" type="text" value="{{ $supplier->name }}" class="validate" name="supplier_id">
          <label for="supplier">Leverantör</label>
        </div>

        <!-- <div class="input-field">
          <input id="transporter" type="text" class="validate" name="date">
          <label for="transporter">Transportör</label>
        </div>

        <div class="input-field">
          <input id="referencenumber" type="text" class="validate" name="reference_number">
          <label for="referencenumber">Referensnummer</label>
        </div>

        <div class="input-field">
          <input id="ordernumber" type="text" class="validate" name="order_id">
          <label for="ordernumber">Beställningsnummer</label>
        </div>

        <div class="input-field">
          <input id="ariclenumber" type="text" class="validate" name="date">
          <label for="ariclenumber">Artikelnummer</label>
        </div>

        <div class="input-field">
          <input id="position" type="text" class="validate" name="position">
          <label for="position">Position?</label>
        </div>

        <div class="input-field">
          <input id="meter" type="text" class="validate" name="length">
          <label for="meter">Antal meter</label>
        </div>

        <div class="input-field">
          <input id="weight" type="text" class="validate" name="weight">
          <label for="weight">Vikt</label>
        </div>

        <div class="input-field">
          <input id="totalweight" type="text" class="validate" name="total_weight">
          <label for="totalweight">Totalvikt</label>
        </div>

        <div class="file-field input-field">

          <div class="btn">
            <span>File</span>
            <input type="file" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Ladda upp PDF" name="file">
          </div>
        </div>
         -->
        <button class="btn waves-effect default #000000 addorder">Lägg till order</button>

        <button class="btn waves-effect default #000000 faded" type="submit">Gå vidare
          <i class="material-icons right">send</i>
        </button>
</form>

@stop
    
