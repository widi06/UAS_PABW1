<?php 
  $gambar   = $_FILES['gambar']['name'];
  // Apabila gambar tidak diganti
  if (empty($gambar)){
    $mysqli->query("UPDATE kantong SET nama_kantong     = '$_POST[nama_kantong]',
                        jenis_kantong    = '$_POST[jenis_kantong]',
                        berat_kantong = '$_POST[berat_kantong]',
                        deskripsi  = '$_POST[deskripsi]'
                    WHERE id = '$_POST[id]'");
  }else{

    $hapus= $mysqli->query("SELECT * FROM kantong where id='$_POST[id]'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat foto
    $hapus_gambar="images/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
    $mysqli->query("UPDATE kantong SET nama_kantong     = '$_POST[nama_kantong]',
                        jenis_kantong    = '$_POST[jenis_kantong]',
                        berat_kantong = '$_POST[berat_kantong]',
                        deskripsi  = '$_POST[deskripsi]',
                        gambar  = '$gambar'
                    WHERE id = '$_POST[id]'");
  }
  header('location:index.php');
?>