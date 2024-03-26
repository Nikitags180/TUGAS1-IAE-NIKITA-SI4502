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
        <th>Player Place</th>
        <th>Player Name</th>
        <th>Team Name</th>
        <th>Player Goals</th>
        <th>Player Assists</th>
        <th>Player Penalty Goals</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataset as $data)
        <tr>
        <td>
            {{$data['player_place']}}
        </td>
        <td>
            {{$data['player_name']}}
        </td>
        <td>
            {{$data['team_name']}}
        </td>
        <td>
            {{$data['goals']}}
        </td>
        <td>
            {{$data['assists']}}
        </td>
        <td>
            {{$data['penalty_goals']}}
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>


</body>
</html>
@endsection

