@extends('layouts.template')
@section('content')
<header class="section__container header__container">
    <div class="header__content">
      <span class="bg__blur"></span>
      <span class="bg__blur header__blur"></span>
      <h4>IT'S TIME TO</h4>
      <h1><span>MAKE</span> YOUR OWN CHANGE</h1>
      <p>
        Unleash your potential and embark on a journey towards a stronger,
        fitter, and more confident you. Sign up for 'Make Your Own Change' now
        and witness the incredible transformation your body is capable of!
      </p>
      @if (Auth::user())
      <button onclick="window.location.href='{{ route('programs.index') }}'" class="btn">Get Started</button>
      @else
      <button onclick="window.location.href='{{ route('login') }}'" class="btn">Get Started</button>
      @endif
    </div>
    <div class="header__image">
      <img src="{{asset('assets/images/main.png')}}" alt="main" />
    </div>
  </header>
@endsection