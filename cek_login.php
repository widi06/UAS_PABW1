<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username'and password = '$password'");
$cek = mysqli_num_rows($query);
		
		// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($query);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
			header("location:admin1/admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:pegawai1/pegawai/index.php");

	// cek jika user login sebagai pengurus
	}

	
}else{
	header("location:index.php?pesan=gagal");
}
?>