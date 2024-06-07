@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .floating-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: var(--secondary-color);
    color: var(--white);    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 50%;
}
</style>
<div class="container">

    <h1 class="heading">Programs</h1>

    <div class="box-container">
      @foreach ($programs as $program) 
      <div class="box">
          <h3>{{$program->title}}</h3>
          <p>{{$program->description}}</p>
          <a href="{{route('programs.show', $program)}}" class="btn">Start</a>
      </div>
      @endforeach
    </div>
    @if(Auth::user())
    <a href="{{route('programs.create')}}" class="floating-btn"><i class="fas fa-plus"></i></a>
    @endif
    

</div>
@endsection