@extends('layouts.createmain')

@section('create')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">bikin akun buruan</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">punya account kgk lu?</h3>
		      	<form action="/data_admin" method="POST" class="signin-form">
                    @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Langsung bikin</button>
	            </div>
                    <div class="w-50 text-md-right">
                    <button class="btn btn-secondary"><a href="/admin" style="color: #fff">ini tombol BATAL </a></button>
                    </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>
@endsection
<script src="../formpack/js/jquery.min.js"></script>
<script src="../formpack/js/popper.js"></script>
<script src="../formpack/js/bootstrap.min.js"></script>
<script src="../formpack/js/main.js"></script>

	</body>
</html>

