<div class="sidebar">
  <h2>Hi Admin</h2>
  <ul>
    <li><a href="{{route('dashboard.admin')}}">Dashboard</a></li>
    <li><a href="{{route('dashboard.programs')}}">Program</a></li>
    <li><a href="{{route('dashboard.users')}}">Users</a></li>
    <li><a href="{{route('dashboard.workouts')}}">Workout</a></li>
  </ul>
  <div class="logout">
    <a href="{{route('doLogout')}}">Logout</a>
  </div>
</div>