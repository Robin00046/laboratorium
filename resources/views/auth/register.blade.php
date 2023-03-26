<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('loginstyle/') }}/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
            
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
	<img class="wave" src="{{ asset('loginstyle/') }}/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="{{ asset('loginstyle/') }}/img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('register') }}">
                @csrf
				<img src="{{ asset('loginstyle/') }}/img/avatar.svg">
				<h2 class="title">Registrasi</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>User</h5>
           		   		<input id="email" class="input" type="text" name="name" :value="old('name')" required autofocus >
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="password" class="input"
                           type="password"
                           name="password"
                           required autocomplete="current-password">
            	   </div>
            	</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Konfirmasi Password</h5>
           		    	<input id="password_confirmation" class="input"
                        type="password"
                        name="password_confirmation" required />
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Registrasi">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('loginstyle/') }}/js/main.js"></script>
</body>
</html>