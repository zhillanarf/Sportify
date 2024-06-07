@extends('template')
@section('content')
<div class="container">

        <h1 class="heading">Workouts</h1>
    
        <div class="box-container">
    
           @foreach ($workouts as $workout)   
           <div class="box">
            @if ($workout->image)
                {{-- <img src="{{asset('assets/images/'.$workout->image)}}" alt=""> --}}
                <img src="{{asset($workout->image)}}" alt="">

            @else
                <img src="{{asset('assets/images/wobenchpress.jpeg')}}" alt="">
            @endif
               <h3>{{$workout->name}}s</h3>
               <p>{{$workout->description}}</p>
               <a href="#" class="btn">read more</a>
           </div>
           @endforeach 

    
        </div>
    
    </div>       
  
@endsection