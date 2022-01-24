
<?php 
date_default_timezone_set("Asia/Jakarta");
echo date ("d F Y");
$jam = date ("H:i:s");
  	echo " | Pukul : <b>" . $jam . "" ."</b>";

  	$a = date ("H");

  	if (($a>=6) && ($a<=11)){
    	echo " <br> SELAMAT PAGI !! </br>";
  	} else if (($a>=12) && ($a<=16)){
    	echo " SELAMAT SIANG !!";
  	}else{
    	echo " <br> </br>SELAMAT MALAM !! </br><center>";
  }

?>