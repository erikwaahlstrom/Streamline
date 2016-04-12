@extends('template')

@section('content')
<!-- <div class="content"> -->
    <div class="title">Ankommande leveranser</div>

    <table class="striped">
        <thead>
          <tr>
              <th data-field="referencenumber">Referensnummer</th>
              <th data-field="supplier">Leverantör</th>
              <th data-field="datetime">Datum & tid</th>
              <th data-field="dropspot">Avlossningsplats</th>
              <th data-field="pdf">Pdf</th>
              @if(Auth::user()->role == 1)
              <th data-field="radera">Avboka leverans</th>
              @endif
          </tr>
        </thead>

        <tbody>
            @foreach($bookings as $booking)
                @if($booking->date > date("Y/m/d h:i"))
                    <tr>
                        <td>{{ $booking->reference_number }}</td>
                        <td>{{ $booking->supplier->name }}</td>
                        <td>{{ $booking->date }}</td>
                        <td>
                            @if(Auth::user()->role == 1)
                            <form method="POST" action="{{ url('/setdropplace') }}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="booking_id" value="{{ $booking->id }}"></input>
                                <select class="browser-default" name="drop_place" onchange="this.form.submit()">
                                    @if($booking->drop_place == 1)
                                    <option value="1" selected>Avlossningsplats 1</option>
                                    <option value="2">Avlossningsplats 2</option>
                                    <option value="3">Avlossningsplats 3</option>
                                    <option value="4">Avlossningsplats 4</option>

                                    @elseif($booking->drop_place == 2)
                                    <option value="1">Avlossningsplats 1</option>
                                    <option value="2" selected>Avlossningsplats 2</option>
                                    <option value="3">Avlossningsplats 3</option>
                                    <option value="4">Avlossningsplats 4</option>

                                    @elseif($booking->drop_place == 3)
                                    <option value="1">Avlossningsplats 1</option>
                                    <option value="2">Avlossningsplats 2</option>
                                    <option value="3" selected>Avlossningsplats 3</option>
                                    <option value="4">Avlossningsplats 4</option>

                                    @elseif($booking->drop_place == 4)
                                    <option value="1">Avlossningsplats 1</option>
                                    <option value="2">Avlossningsplats 2</option>
                                    <option value="3">Avlossningsplats 3</option>
                                    <option value="4" selected>Avlossningsplats 4</option>

                                    @else
                                    <option disabled selected>Välj avlossningsplats</option>
                                    <option value="1">Avlossningsplats 1</option>
                                    <option value="2">Avlossningsplats 2</option>
                                    <option value="3">Avlossningsplats 3</option>
                                    <option value="4">Avlossningsplats 4</option>
                                    @endif
                                </select>
                            </form>
                            @else
                                @if(!$booking->drop_place == null)
                                    {{ $booking->drop_place }}
                                @else
                                    Avlossningsplats ej angiven
                                @endif
                            @endif
                        </td>
                        <td><a class="btn waves-effect default #000000 pdfbtn" href="{{ $booking->pdf_url }}" target="_blank">Pdf</a></td>
                        @if(Auth::user()->role == 1)
                        <td>
                            <form method="POST" action="{{ url('/deletebooking') }}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="booking_id" value="{{ $booking->id }}"></input>
                                <button class="btn waves-effect default #000000 deletebtn" type="submit">Avboka</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endif
            @endforeach
        </tbody>
      </table>
@stop
