<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Sportify</title>
    <link rel="stylesheet" href="{{asset('assets/css/styleslog.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
       <div class="title-text">
          <div class="title login">
             Register 
          </div>
       </div>
       <div class="form-container">
          <div class="form-inner">
             <form action="{{route('doRegister')}}" method="post" class="signup">
              @csrf
              <div class="field">
                <label for="email">
                  <input type="text" id="email" name="email" placeholder="Enter Your Email" required>
                </label>
              </div>
                <div class="field">
                  <label for="name">
                    <input type="text" id="name" name="name" placeholder="Enter Your Username" required>
                  </label>
                </div>
                <div class="field">
                  <label for="password">
                    <input id="password " type="password" name="password" placeholder="******" required>
                  </label>
                </div>
                <div class="field">
                  <label for="confirm_password"></label>
                   <input id="confirm_password" name="confirm_password" type="password" placeholder="******" required>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" name="proses" value="Sign Up">
                </div>
                <div class="signup-link">
                   Already have an account? <a href="{{route('login')}}">Login</a>
                </div>
             </form>
          </div>
       </div>
    </div>
  </body>
</html>




