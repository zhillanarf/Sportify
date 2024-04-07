<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Sportify</title>
    <link rel="stylesheet" href="{{asset('assets/css/styleslog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/images/bglog.JPG')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
       <div class="title-text">
          <div class="title login">
             Login 
          </div>
       </div>
       <div class="form-container">
          <div class="form-inner">
             <form action="{{route('doLogin')}}" method="POST" class="login">
                @csrf
                <div class="field">
                  <label for="email">
                    <input type="email" id="email" name="email" placeholder="Enter your email"  required>
                  </label>
                </div>
                <div class="field">
                  <label for="password">
                    <input type="password" name="password" id="password" placeholder="*****" required>
                  </label>
                </div>
                <div class="pass-link">
                   <a href="">Reset password?</a>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" value="Login">
                </div>
                <div class="signup-link">
                   Don't Have Account? <a href="{{route('register')}}">Register</a>
                </div>
             </form>
          </div>
       </div>
    </div>
  </body>
</html>




