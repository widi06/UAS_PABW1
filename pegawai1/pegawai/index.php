<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../style/style.css">
</head>
<body>

	<?php
		include ('../header.php');
	?>
	  


	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['level']!="pegawai"){
		header("location:../index.php?pesan=belum_login");
	
	}
	?>
	

	<?php
	include "../isi.php";
	?>

	

</body>
</html>