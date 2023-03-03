<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="{{ asset('img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('img/bg.svg ') }}">
		</div>
		<div class="login-content">
			<form action="{{ route('admin.checklogin') }} " method="post">
				{{ csrf_field() }}
				<img src="{{ asset('img/avatar.svg') }}">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<input type="text" class="input" name="email" placeholder="Email">
					</div>
					@error('email')
					<span class="text-danger"> {{ $message }} </span>
					@enderror
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<input type="password" class="input" name="password" placeholder="Password">
					</div>
				</div>
				<a href="#">Forgot Password?</a>
				<button type="submit" class="btn">Login</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
</body>

</html>