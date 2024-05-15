@extends('dashboard.layouts.template')
@section('content')
<div class="content">
  <h2>Dashboard</h2>
  <div id="dashboard">
    <div class="dashboard-box">
      <h3>Total Users</h3>
      <p>{{$users->count()}}</p>
    </div>
    <div class="dashboard-box">
      <h3>Total Programs</h3>
      <p>{{$programs->count()}}</p>
    </div>
    <div class="dashboard-box">
      <h3>Total Workouts</h3>
      <p>{{$workouts->count()}}</p>
    </div>
  </div>
</div>
@endsection