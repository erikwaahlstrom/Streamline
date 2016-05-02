@extends('template')

@section('content')

<div class="title">Boka Leverans</div>

@if (session('status'))
<div class="card-panel #66bb6a green lighten-1">
    {{ session('status') }}
</div>
@endif

<form id="newbookingform" class="inputform" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/newbooking') }}">

    {!! csrf_field() !!} 
        <div>
          <input id="datetimepicker" type="text" class="validate" name="date" placeholder="Datum & tid" data-favorite="{{ $supplier->favorite }}">
        </div>
 
        <div>
          <input id="supplier" type="text" value="{{ $supplier->name }}" class="validate" name="supplier_id">
        </div>

        <div class="file-field input-field">
          <div class="btn">
            <span>Pdf</span>
            <input type="file" name="pdf" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Ladda upp pdf">
          </div>
        </div>

 
<!-- <div class="orderbox">
<h6>Order</h6>
<div class="input-field">
<input id="order" type="text" class="validate" name="orders">
<label for="order">Ordernummer</label>
</div>
</div>
<button class="btn waves-effect default #000000 addarticle">Lägg till artikel</button>

<div class="articlebox">
<h6 class="article">Artikel</h6>
<div class="input-field">
<input id="article" type="text" class="validate" name="orders">
<label for="article">Artikelnummer</label>
</div>
<div class="input-field">
<input id="article" type="text" class="validate" name="orders">
<label for="article">Vikt</label>
</div>
<div class="input-field">
<input id="article" type="text" class="validate" name="orders">
<label for="article">Längd</label>
</div>
<div class="input-field">
<input id="article" type="text" class="validate" name="orders">
<label for="article">Position</label>
</div>
</div> --> 
  
        <button class="btn waves-effect default #000000 addarticle hide">Lägg till artikel</button>

        <button class="btn waves-effect default #000000 addorder">Lägg till order<i class="material-icons right">reorder</i></button>

        <button class="btn waves-effect default #000000 hide bookingbtn" type="submit">Slutför bokning
          <i class="material-icons right">send</i>
        </button>

        <button class="btn waves-effect default #000000 deletebtn" onclick="location.reload()">Avbryt bokning<i class="material-icons right">error</i></button>

</form>

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
        </div>-->

@stop
