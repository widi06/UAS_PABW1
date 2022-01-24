<?php
$badge = $_POST['badge'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$mysqli->query("INSERT INTO anggota(badge,nama,alamat,jabatan) VALUES('$badge','$nama','$alamat','$jabatan')");
header('location:index.php');
?>