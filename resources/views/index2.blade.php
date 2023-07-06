<!DOCTYPE html>
<html>
<head>
	<title>FlyWithUs</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" href = "{{ asset('/foto/logo1.png') }}" type = "image/png">
	<style>
		
	</style>
</head>
<body>
	<img class="wave" src="{{ asset('/foto/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('/css/bg.svg') }}">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
			@csrf

				<img src="{{ asset('/foto/p.jpg') }}">
				<h2 class="title"> FlyWithUs</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input class="input" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

							  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input class="input" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						   
						   @error('password')
									<div class="alert alert-success">
											<strong>{{ $message }}</strong> Indicates a successful or positive action.
									</div>
                                @enderror
            	   </div>
            	</div>
				<div class="form-group ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									<label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
            	<a href="{{ url('/password/reset') }}">Forgot Password?</a>
				<a href="{{ url('/register') }}">Sign Up</a><br>
            	<input type="submit" class="btn" value="Login">

            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
