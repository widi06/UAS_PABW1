<?php 
   $hapus=$mysqli->query("SELECT * FROM anggota WHERE id='$_GET[id]'");
    
    $mysqli->query("DELETE FROM anggota WHERE id='$_GET[id]'");
    header('location:index.php');
?>