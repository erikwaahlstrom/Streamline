@extends('template')

@section('content')
<div class="content">

    <div class="title">Ankommande leveranser</div>

    <table class="striped">
        <thead>
          <tr>
              <th data-field="id">Transportör</th>
              <th data-field="name">Leveranstid</th>
              <th data-field="">Avlossningsplats</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Wohlfarths åkeri AB</td>
            <td>09:00</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Wahlströms Leveranser AB</td>
            <td>09:30</td>
            <td>2</td>
          </tr>
          <tr>
            <td>Gentians Budbil AB</td>
            <td>11:30</td>
            <td>3</td>
          </tr>
          <tr>
            <td>LKW Walter</td>
            <td>12:30</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Åkes åkeri</td>
            <td>13:30</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Åkes åkeri</td>
            <td>14:30</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Åkes åkeri</td>
            <td>15:00</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Åkes åkeri</td>
            <td>15:30</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Åkes åkeri</td>
            <td>16:00</td>
            <td>3</td>
          </tr>
        </tbody>
      </table>

</div>
@stop