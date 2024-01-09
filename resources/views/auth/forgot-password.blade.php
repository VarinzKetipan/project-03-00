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
              <h3>Forgot your password?<strong></strong></h3><br>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              <h6>No problem just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
              </div>

              <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

              <form action="#" method="post" method="POST" action="{{ route('password.email') }}">
                @csrf
                

                <div class="form-group first">
                  <label for="username">E-mail</label>
                  <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="email">
                </div>

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                <input type="submit" value="Email Password Reset Link" class="btn btn-block btn-primary">
                <div class="login100-form-social flex-c-m">
					<a href="{{route('login')}}" class="txt2 bo1">
						back to sign in
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