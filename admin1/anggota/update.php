<?php 
  
    $mysqli->query("UPDATE anggota SET badge     = '$_POST[badge]',
                        nama    = '$_POST[nama]',
                        alamat = '$_POST[alamat]',
                        jabatan  = '$_POST[jabatan]'
                    WHERE id = '$_POST[id]'");

  header('location:index.php');
?>