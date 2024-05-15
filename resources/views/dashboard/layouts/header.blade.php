<div class="sidebar">
  <h2>Hi Admin</h2>
  <ul>
    <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
    <li><a href="{{route('programs.index')}}">Program</a></li>
    <li><a href="{{route('users.index')}}">Users</a></li>
    <li><a href="{{route('workouts.index')}}">Workout</a></li>
  </ul>
  <div class="logout">
    <a href="{{route('doLogout')}}">Logout</a>
  </div>
</div>