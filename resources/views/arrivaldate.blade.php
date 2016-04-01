@extends('template')

@section('content')

      <div class="title">Boka ankomsttid</div>
        <!-- form start -->
        <div id="topform" class="input-field">
          <input id="datetimepicker" type="text" class="validate">
          <label for="email">Datum & tid</label>
        </div>

        <div class="input-field">
          <input id="supplier" type="text" class="validate">
          <label for="supplier">Leverantör</label>
        </div>

        <div class="input-field">
          <input id="transporter" type="text" class="validate">
          <label for="transporter">Transportör</label>
        </div>

        <div class="input-field">
          <input id="referencenumber" type="text" class="validate">
          <label for="referencenumber">Referensnummer</label>
        </div>

        <div class="input-field">
          <input id="ordernumber" type="text" class="validate">
          <label for="ordernumber">Beställningsnummer</label>
        </div>

        <div class="input-field">
          <input id="ariclenumber" type="text" class="validate">
          <label for="ariclenumber">Artikelnummer</label>
        </div>

        <div class="input-field">
          <input id="position" type="text" class="validate">
          <label for="position">Position?</label>
        </div>

        <div class="input-field">
          <input id="meter" type="text" class="validate">
          <label for="meter">Antal meter</label>
        </div>

        <div class="input-field">
          <input id="weight" type="text" class="validate">
          <label for="weight">Vikt</label>
        </div>

        <div class="input-field">
          <input id="totalweight" type="text" class="validate">
          <label for="totalweight">Totalvikt</label>
        </div>

        <!-- button -->
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Ladda upp PDF">
          </div>
        </div>

@stop