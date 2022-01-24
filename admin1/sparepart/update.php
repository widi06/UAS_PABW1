<?php 
  $foto = $_FILES['foto']['name'];
  // Apabila gambar tidak diganti
  if (empty($foto)){
    $mysqli->query("UPDATE sparepart SET 
                tanggal        = '$_POST[tanggal]',
                jam            = '$_POST[jam]',
                nama_sparepart = '$_POST[nama_sparepart]',
                jumlah         = '$_POST[jumlah]',
                tipe           = '$_POST[tipe]',
                status         = '$_POST[status]'
                    WHERE id = '$_POST[id]'");
  }else{

    $hapus=$mysqli->query("SELECT * FROM sparepart WHERE id='$_GET[id]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['foto'];
    // alamat tempat gambar
    $hapus_gambar="config/images/$lokasi";
    // script delete gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['foto']['tmp_name'],'config/images/'.$foto);
    $mysqli->query("UPDATE sparepart SET 
                tanggal        = '$_POST[tanggal]',
                jam            = '$_POST[jam]',
                nama_sparepart = '$_POST[nama_sparepart]',
                jumlah         = '$_POST[jumlah]',
                tipe           = '$_POST[tipe]',
                status         = '$_POST[status]',
                foto           = '$foto'
                    WHERE id = '$_POST[id]'");
  }
  header('location:index.php');
?>