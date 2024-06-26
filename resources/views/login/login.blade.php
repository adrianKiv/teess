<!doctype html>
<html lang="en">
  <head>
  	<title>Login admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../loginpack/css/style.css">

	</head>
	<body>
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				{{-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #05</h2>
				</div> --}}
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(assets/images/logo_hiu3biru.png);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Log In</h3>
			      		</div>
								<div class="w-100">
									{{-- <p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p> --}}
								</div>
			      	</div>
						<form action="proseslogin" method="POST" class="signin-form">
                            @csrf
			      		<div class="form-group mt-3">
                            <input type="text" name="username_admin" class="form-control @error('username_admin') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username_admin') }}">
                            <label for="username">Username</label>
                            @error('username_admin')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
			      		</div>
		            <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
		              {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">masuk</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	{{-- <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label> --}}
									</div>
									<div class="w-50 text-md-right">
										<a href="/">back ke awal</a>
									</div>
		            </div>
		          </form>
		          {{-- <p class="text-center">Not a member? <a data-toggle="tab" href="#">Sign Up</a></p> --}}
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../loginpack/js/jquery.min.js"></script>
  <script src="../loginpack/js/popper.js"></script>
  <script src="../loginpack/js/bootstrap.min.js"></script>
  <script src="../loginpack/js/main.js"></script>

	</body>
</html>

