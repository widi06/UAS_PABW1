<?php
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$shift = $_POST['shift'];
$distributor = $_POST['distributor'];
$ekspeditur = $_POST['ekspeditur'];
$no_polisi = $_POST['no_polisi'];
$nama_sopir = $_POST['nama_sopir'];
$netto = $_POST['netto'];
$mysqli->query("INSERT INTO release_terakhir(tanggal,jam,shift,distributor,ekspeditur,no_polisi,nama_sopir,netto) VALUES('$tanggal','$jam','$shift','$distributor','$ekspeditur','$no_polisi','$nama_sopir','$netto')");
header('location:index.php');
?>