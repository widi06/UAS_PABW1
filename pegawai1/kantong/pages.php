

<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	include "koneksi.php";

   
     if ($_GET['page']=="view") {
		include "view.php";
	}

	else{
		include "read.php";
	}
?>