<!doctype html>
<html lang="en">
  <head>
  	<title>Appointment Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/logo.png" rel="apple-touch-icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/login-asset/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(/login-asset/images/bg.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><img class="mb-3 center" src="/img/logo.png" alt="" width="125" height="110"><br>Rifan Financindo Berjangka <br>Ciputra World Surabaya</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					@if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        @endif

        @if(session()->has('loginError'))
      <div class="alert alert-success danger-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        @endif
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Appointment Login</h3>
		      	<form action="/login" method="post" class="signin-form">
					@csrf
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" autofocus required value="{{old('username')}}">
						  @error('username')
						  <div class="invalid-feedback">{{$message}}</div>
						@enderror
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          </form>
	
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/login-asset/js/jquery.min.js"></script>
  <script src="/login-asset/js/popper.js"></script>
  <script src="/login-asset/js/bootstrap.min.js"></script>
  <script src="/login-asset/js/main.js"></script>

	</body>
</html>

