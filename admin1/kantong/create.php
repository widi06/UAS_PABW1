
<?php
$nama_kantong = $_POST['nama_kantong'];
$jenis_kantong = $_POST['jenis_kantong'];
$berat_kantong = $_POST['berat_kantong'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$mysqli->query("INSERT INTO kantong(nama_kantong,jenis_kantong,berat_kantong,deskripsi,gambar) VALUES('$nama_kantong','$jenis_kantong','$berat_kantong','$deskripsi','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index.php');
?>