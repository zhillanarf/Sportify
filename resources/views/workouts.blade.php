@extends('template')
@section('content')
<div class="container">

        <h1 class="heading">Workouts</h1>
    
        <div class="box-container">
    
            
    
            <div class="box">
                <img src="{{asset('assets/images/wobicepcurl.jpeg')}}" alt="">
                <h3>Bicep Curls</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="#" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="{{asset('assets/images/wolateralraises.jpeg')}}" alt="">
                <h3>Lateral Raises</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="#" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="{{asset('assets/images/wolatpulldown.jpg')}}" alt="">
                <h3>Lat Pull-down</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="#" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="{{asset('assets/images/wosquats.jpeg')}}" alt="">
                <h3>Squats</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="#" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="{{asset('assets/images/wotriceppushdown.jpeg')}}" alt="">
                <h3>Tricep Push-down</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
                <a href="#" class="btn">read more</a>
            </div>
    
        </div>
    
    </div>       

    <div class = heading>
        <h1>Comments</h1>
    </div>

<div class="comment-section">
    <div class="user-profile">
      <img src="profile_picture.jpg" alt="Profile Picture">
      <span class="user-name">John Doe</span>
    </div>
    <form action="#" method="post">
      <label for="comment">Write your comment:</label><br>
      <textarea id="comment" name="comment" rows="4" required></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </div>
  
@endsection