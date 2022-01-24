<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>Login Page</title>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/buttercake@3.0.0/dist/css/butterCake.min.css">
</head>
<body>
	<?php

	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']== "gagal") {
			echo "<script>alert('Cek Data Anda !')</script>";
		} else if ($_GET['pesan']== "logout"){
			echo "<script>alert('Anda Telah Logout !')</script>";
		} else if ($_GET['pesan']== "belum_login") {
			echo "<script>alert('Anda Harus Login Atau Registrasi !')</script>";
		} 
	}
	?>
	<section class="login-page flex-center-center py-5 bg-light">
	<div class="w-100 mx-auto px-2" style="max-width: 400px">
	<form action="cek_login.php" method="post">

		<div class="text-center text-gray">
			<?php
			include "fungsi_realtime.php";
			?>
		</div>

		<div class="card overflow-unset mt-9 mb-1">
			<div class="card-body">
				
				<!-- AVATAR -->
				<div class="avatar-icon text-center">
					<img src="" alt="avatar" class="img-circle img-hover card mb-2 ml-auto mr-auto p-1">
				</div>

				<!-- Username -->
				<div class="form-group">
					<label for="username">USERNAME</label>
					<input type="text" name="username" id="username" class="form-control" required autofocus=>
				</div>

				<!--Password-->
				<div class="form-group">
					<label for="password">PASSWORD</label>
					<input type="password" name="password" id="password" class="form-control" required autofocus>
				</div>
				
				<!--Login-->
				<div class="form-group">
					<button type="submit" class="btn primary block btn-lg weight-500">Login</button>
				</div>
			</div>
		</div>
		<!--LINK-->
		<div class="text-center weight-600 text-gray">
        	<a href="" class="text-gray">Sign Up</a> · 
        	<a href="" class="text-gray">Forgot Password</a> · 
        	<a href="" class="text-gray">Need Help?</a>
      </div>
		
	</form>
	</div>
	</section>
	<style>
		.login-page{
			min-height: 100vh;
		}
		.login-page .avatar-icon img{
			margin-top: -80px;
			width: 128px;
			height: 128px;
		}
	</style>
</body>
</html>
