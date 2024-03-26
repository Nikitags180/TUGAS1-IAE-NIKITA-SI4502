@extends('layout.main')

@section('title', 'Teams and Top Scores')
<!-- di titik-titik masukin title contoh: RIKOST | Gedung-->
<style>
    td, tr {
        text-align: center
    }
</style>

@section('content')
<!-- masukin isi content disini -->
<div class="container">
    <div class="row">
  <table class="table">
    <thead>
      <tr>
        <th>Team Name</th>
        <th>Team Country</th>
        <th>Team Founded</th>
        <th>Logo Team</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataset as $data)
        <tr>
        <td>
            {{$data['team_name']}}
        </td>
        <td>
            {{$data['team_country']}}
        </td>
        <td>
            {{$data['team_founded']}}
        </td>
        <td>
            <img src="{{$data['team_badge']}}" alt="" width="25px" height="25px">
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>


</body>
</html>
@endsection

