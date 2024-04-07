@extends('template')
@section('content')
<div class="container">

    <h1 class="heading">Programs</h1>

    <div class="box-container">

        <div class="box">
            <h3>Push</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="listprog.html" class="btn">Start</a>
        </div>

        <div class="box">
            <h3>Pull</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="listprog.html" class="btn">Start</a>
        </div>

        <div class="box">
            <h3>Back</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="listprog.html" class="btn">Start</a>
        </div>

    </div>
    @if(Auth::user())
    <div class = btn>
        <button>Add Program</button>
    </div>
    @endif
    

</div>
@endsection