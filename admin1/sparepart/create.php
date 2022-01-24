<?php
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$nama_sparepart = $_POST['nama_sparepart'];
$jumlah = $_POST['jumlah'];
$tipe = $_POST['tipe'];
$status = $_POST['status'];
$foto = $_FILES['foto']['name'];
$qr_code = $_FILES['qr_code']['name'];
$mysqli->query("INSERT INTO sparepart(tanggal,jam,nama_sparepart,jumlah,tipe,status,foto,qr_code) VALUES('$tanggal','$jam','$nama_sparepart','$jumlah','$tipe','$status','$foto','$qr_code')");
move_uploaded_file($_FILES['foto'],['qr_code']['tmp_name'],'images/'.$foto .$qr_code);

header('location:index.php');
?>