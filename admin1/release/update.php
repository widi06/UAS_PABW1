<?php 
  
    $mysqli->query("UPDATE release_terakhir SET tanggal     = '$_POST[tanggal]',
                        jam    = '$_POST[jam]',
                        shift = '$_POST[shift]',
                        distributor  = '$_POST[distributor]',
                        ekspeditur  = '$_POST[ekspeditur]',
                        no_polisi  = '$_POST[no_polisi]',
                        nama_sopir  = '$_POST[nama_sopir]',
                        netto  = '$_POST[netto]'
                    WHERE id = '$_POST[id]'");

  header('location:index.php');
?>