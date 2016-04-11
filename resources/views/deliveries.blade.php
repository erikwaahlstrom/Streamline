@extends('template')

@section('content')
<!-- <div class="content"> -->
    <div class="title">Ankommande leveranser</div>

    <form id="leveranserform" role="form" method="POST" action="">

    <table class="striped">
        <thead>
          <tr>
              <th data-field="referencenumber">Referensnummer</th>
              <th data-field="supplier">Leverantör</th>
              <th data-field="datetime">Datum & tid</th>
              <th data-field="dropspot">Avlossningsplats</th>
              <th data-field="pdf">Pdf</th>
              <th data-field="radera">Avboka leverans</th>
          </tr>
        </thead>

        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->reference_number }}</td>
                    <td>{{ $booking->supplier->name }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>Avlossningsplats</td>
                    <td><a href="{{ $booking->pdf_url }}">Pdf-fil</a></td>
                    <td>Radera</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</form>
@stop
