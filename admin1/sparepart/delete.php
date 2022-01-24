
<?php 
   $hapus=$mysqli->query("SELECT * FROM sparepart WHERE id='$_GET[id]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['foto'.'qr_code'];
    // alamat tempat gambar
    $hapus_gambar="images/$lokasi";
    // script delete gambar dari folder
    unlink($hapus_foto);
    $mysqli->query("DELETE FROM sparepart WHERE id='$_GET[id]'");
    header('location:index.php');
?>