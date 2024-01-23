<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('authen/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('authen/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('authen/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('authen/css/style.css')}}">

    <title>sign up #4</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('authen/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>sign up<strong></strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="#" method="post" method="POST" action="{{route('register')}}">
                @csrf
                <div class="form-group first">
                  <label for="username">name</label>
                  <input type="text" name="name" class="form-control" placeholder="your-name" id="name">
                </div>

                <div class="form-group first">
                  <label for="username">username</label>
                  <input type="text" name="username" class="form-control" placeholder="your-username" id="username">
                </div>


                <div class="form-group first">
                  <label for="username">phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="your-phone" id="phone">
                </div>


                <div class="form-group first">
                  <label for="username">E-mail</label>
                  <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="email">
                </div>


                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                </div>
                
                <div class="form-group last mb-3">
                  <label for="password">Password Confirm</label>
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Your Password" id="password">
                </div>


                <input type="submit" value="sign up" class="btn btn-block btn-primary">
                <div class="login100-form-social flex-c-m">
					      <a href="{{route('login')}}" class="txt2 bo1">
						    back to login
					      </a>
				        </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('authen/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('authen/js/popper.min.js')}}"></script>
    <script src="{{asset('authen/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('authen/js/main.js')}}"></script>
  </body>
</html>