<nav>
  <div class="nav__logo">
    <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
  </div>
  <ul class="nav__links">
    <li class="link"><a href="{{ route('welcome') }}">Home</a></li>
    <li class="link"><a href="{{route('programs.index')}}">Program</a></li>
    <li class="link"><a href="{{ route('workouts.index') }}">Workout</a></li>
    <li class="link"><a href="{{route('about')}}">About Us</a></li>
  </ul>

  @auth
  <div style="display: flex">
    <p style="color: white; margin-right: 20px ">Hai, {{ Auth::user()->name }}</p>
    <a href="{{ route('doLogout') }}">Log out</a>
  </div>
  @else
  <div class="link">
    <a href="{{ route('login') }}">Login</a>
  </div>
  @endauth
</nav>
